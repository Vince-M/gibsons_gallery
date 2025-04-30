<?php get_header(); ?>

  <!-- HEADER
  =================================================== -->
  <header class="topnav header" role="banner">
    <div class="top__bar"></div>
    <div class="wrapper topnav__wrapper">
      <a href="index.html" class="topnav__homelink hover-fade">
        <img src="img/gibsons_gallery_header.svg" alt="Gibson's Gallery homepage" class="topnav__logo" width="340" height="78">
      </a>
      <nav class="nav">
        <span id="nav-label" hidden>Navigation</span>
        <div id="overlay" class="topnav__overlay"></div>

        <button
          id="btnOpen"
          class="topnav__open" 
          aria-expanded="false"
          aria-labelledby="nav-label"
          >
          <img src="img/hamburger.svg" alt="" width="30" height="23" />
        </button>

        <div
          id="menuTopNav"
          class="topnav__menu" 
          role="dialog" 
          aria-labelledby="nav-label">

          <button
            id="btnClose"
            class="topnav__close">
            <img src="img/close-button.svg" alt="" width="26" height="26" />
          </button>
          
          <ul class="topnav__links">
            <li class="topnav__item">
              <a href="artists.html" class="topnav__link">Artists</a>
            </li>
            <li class="topnav__item">
              <a href="workshops.html" class="topnav__link">Workshops</a>
            </li>
            <li class="topnav__item">
              <a href="services.html" class="topnav__link">Services</a>
            </li>
            <li class="topnav__item">
              <a href="about.html" class="topnav__link">About</a>
            </li>
            <li class="topnav__item">
              <a href="contact.html" class="topnav__link">Contact</a>
            </li>
          </ul>

        </div>
      </nav>
    </div>

  </header>
  <!-- ============================================== -->

  <!-- MAIN
  =================================================== -->
  <main id="main" class="main" role="main">


    <!-- HERO SECTION START -->
    <section class="indexHero">
      <div class="hero-img">
        <img class="full-width" src="img/hero_gibsonGlass_hero_1920x675.jpg" alt="">
      </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- INTRO SECTION START -->
    <section class="wrapper intro">
      <article class="intro__header heading__wrapper">
        <h1 class="intro__heading">Welcome to Gibson's Gallery</h1>
      </article>
      <article class="wrapper intro__text">
        <h2 class="visually-hidden">Introduction to Gibson's Gallery</h2>
          <div class="col1">
            <p>Nestled in the picturesque Albert Beach, Manitoba, Gibson's Gallery is your premier destination for exquisite stained glass, fused glass and unique artwork by local Manitoba Artists. Our gallery showcases a stunning collection of art, each piece meticulously crafted to add a touch of elegance and artistry to any space.</p>
            <h2>Visit Us</h2>
            <p>Experience the magic of glass art at Gibson's Gallery. We invite you to visit our gallery, explore our unique collection, and discuss your next project with our talented team. Let us transform your ideas into a captivating reality.</p>
            <h2>Celebrating Local Talent</h2>
            <p>In addition to our custom glass projects, Gibson's Gallery proudly exhibits the works of talented local Manitoba artists. Our gallery is a vibrant hub for the community, showcasing a diverse array of artistic expressions that highlight the rich cultural heritage of Albert Beach and the surrounding area.</p>
          </div>
          <div class="col2">

          </div>
      </article>
      <article class="wrapper feature__lg fade-in">
        <img src="img/intro__img--lg.jpg" alt="visitors in the Gallery appreciating the artwork" width="1200" height="350">
      </article>
      <article class="wrapper features fade-in">
        <div class="featureImg">
          <div class="featured">
              <img src="img/featureImg__artists_560x556.jpg" alt="paintbrushes in a jar, other artists supplies" width="560" height="556">
          </div>
          <a class="feature__link" href="artists.html">Artists &#10095;</a>
        </div>
        <div class="featureImg">
          <div class="featured">
            <img src="img/featureImg__workshops_560x556.jpg" alt="workshop participant showing her painting on tyndal stone" width="560" height="556">
          </div>
          <a class="feature__link" href="workshops.html">Workshops &#10095;</a>
        </div>
        <div class="featureImg">
          <div class="featured">
            <img class="featureImg"  src="img/featureImg__services_560x556.jpg" alt="prints for sale in a flip case" width="560" height="556">
          </div>
          <a class="feature__link" href="services.html">Services &#10095;</a>
        </div>
        <div class="featureImg">
          <div class="featured">
            <img class="featureImg" src="img/featureImg__about_560x556.jpg" alt="Gibson's Gallery logo as stained glass hanging in the window" width="560" height="556">
          </div>
          <a class="feature__link" href="about.html">About &#10095;</a>
        </div>
      </article>
    </section>
    <!-- INTRO SECTION ENDS -->

    <!-- WORKSHOP SECTION START -->
    <section class="workshop__connect">
      <article class="wrapper workshop__notice">
        <img class="workshop__branding" src="img/gibsons-mark.svg" alt="Gibson's Gallery Glass Art & More" width="400" height="115">

        <div class="workshop__text">
          <h3>Get Notified of our next<br>
            Classes/Workshops</h3>
              <div class="btn btn__workshop">
                <a class="btn ghost" href="contact.html">Workshop Info</a>
              </div>
        </div>
      </article>
    </section>
    <!-- WORKSHOP SECTION ENDS -->

    <!-- GALLERY PHOTOS SECTION START -->
    <section class="wrapper galleryPhotos">
      <article class="galleryPhotos__twoCols">
        <div class="galleryPhotos__col1">
          <img class="galleryPhoto__img" src="img/galleryPhoto1__1180x700.jpg" alt="Fused Glass Keepsake Greeting Cards in stand" width="590" height="350">
        </div>
        
        <div class="galleryPhotos__col2">
          <img class="galleryPhoto__img" src="img/galleryPhoto2__1180x700.jpg" alt="Wire fused between class guitar and music notes in stand" width="590" height="350">
        </div>
      </article>
      <article class="galleryPhotos__fullWidth">
        <img class="galleryPhoto__img" src="img/galleryPhoto__fullWidth.jpg" alt="Gallery wall featuring various paintings" width="1200" height="500">
      </article>
    </section>
    <!-- GALLERY PHOTOS SECTION ENDS -->

  </main>
  <!-- ============================================== -->

<?php get_footer(); ?>