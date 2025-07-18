<?php get_header(); ?>


  <main id="main" class="main" role="main">

    <!-- HERO
    =================================================== -->
    <section class="index__hero" role="banner" data-type="background" data-speed="2">

      <div class="hero-img">
        <?php 
          $image = get_field('hero_image');
          if( !empty( $image ) ): ?>
              <img class="full-width" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>

    </section>
    <!-- ============================================== -->

    <!-- INTRO SECTION START
    =================================================== -->
    <section class="wrapper intro__header">
        <article class="about__intro">
          <div class="about__col1">
            <h1 class="artist__head">Meet the <span class="meetArtist">Artist</span></h1>
            <h2 class="artistName"><?php echo esc_html( get_field('artist_name') ); ?></h2>
              <div class="artist__bio">
                <?php the_field('artist_bio'); ?>
              </div>

              <div class="btn btn__artists">
                <?php 
                  $button = get_field('artist_button')
                ?>
                <a 
                role="button" class="btn secondary" 
                href="<?php echo $button['url']; ?>">
                  <?php echo $button['title']; ?>
                </a>
              </div>
          </div>


          <div class="about__col2">
          <?php 
            $image = get_field('artist_bio_image');
            if( !empty( $image ) ): ?>
                <img class="artist__profile" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <!-- <img class="artist__krista" src="img/artist_krista-front_560x600.jpg" alt="Krista Gibson standing in front of some of her stained glass with the light shining from behind" width="600" height="600"> -->
          </div>
        </article>
    </section>
    <!-- ============================================== -->


    <!-- GALLERY SECTION START
    =================================================== -->

    <?php 
      $images = get_field('gallery');
    ?>

    <section class="wrapper">
<?php 
$images = get_field('gallery');
if( $images ): ?>

        <?php foreach( $images as $image ):?>


          <img src="<?php echo $image['sizes']['thumbnail'];?>">
          
        <?php endforeach; ?>

<?php endif; ?>
    </section>
    <!-- ============================================== -->

  </main>

<?php get_footer(); ?>