<?php
/*
  Template Name: Artist template
*/
?>

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

    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>

       

  </main>

<?php get_footer(); ?>