<?php

function gibsons_files() {
  wp_enqueue_script('gibsons_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', true);
  wp_enqueue_script('bodyScrollLock', get_stylesheet_directory_uri() . '/dist/bodyScrollLock.min.js', array(), NULL, '1.0', true);
  wp_enqueue_style('gibsons_fonts', get_template_directory_uri() . get_theme_file_uri('main.css') );
  wp_enqueue_style( 'gibsons_main_style', get_theme_file_uri('main.css') );
}

add_action('wp_enqueue_scripts', 'gibsons_files');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function add_a_class($atts, $item, $args) {
  $atts['class'] = 'topnav__link';
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_a_class', 1, 3);

function gibson_theme_menus() {
  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
      'footer-menu'  =>  'Footer Menu'
    )
    );
}
add_action( 'init', 'gibson_theme_menus' );

// THEME SUPPORT
function gibsons_gallery_features() {
  add_theme_support( 'post-thumbnails');
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'gibsons_gallery_features' );




// this has to be the last function in the funtions.php file
function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );