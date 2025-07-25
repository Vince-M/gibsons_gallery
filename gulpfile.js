// Initialize modules
const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const babel = require("gulp-babel");
const terser = require("gulp-terser");
const browsersync = require("browser-sync").create();

// Copy fonts
function fonts() {
  return src(paths.fonts)
    .pipe(dest(paths.dist + 'fonts'));
}

// Sass Task
function scssTask() {
  return src("app/scss/*.scss", { sourcemaps: true})
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(dest("./", { sourcemaps: "."}));
}

// Javascript Task
function jsTask() {
  return src("app/js/script.js", { sourcemaps: true })
  .pipe(babel({ presets: ["@babel/preset-env"] }))
  .pipe(terser())
  .pipe(dest("dist", { sourcemaps: "." }));
}

// Browsersync
function browserSyncServe(cb) {
  browsersync.init({
    browser: "firefox",
    proxy: "http://gibsons-gallery.local/",
    notify: {
      styles: {
        top: "auto",
        bottom: "0",
      },
    },
  });
  cb();
}
function browserSyncReload(cb) {
  browsersync.reload();
  cb();
}

// Watch Task
function watchTask() {
  watch("*.php", browserSyncReload);
  watch(
    ["app/scss/**/*.scss", "app/**/*.js"],
    series(scssTask, jsTask, browserSyncReload)
  );
}

// Default Gulp Task
exports.default = series(scssTask, jsTask, browserSyncServe, watchTask);

// Build Gulp Task
exports.build = series(scssTask, jsTask);