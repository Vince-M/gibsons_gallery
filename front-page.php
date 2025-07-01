<?php get_header(); ?>


    <!-- HERO
    =================================================== -->
    <section class="index__hero" role="banner" data-type="background" data-speed="2">

      <div class="hero-img__index">
        <?php 
          $image = get_field('hero_image');
          if( !empty( $image ) ): ?>
              <img class="full-width" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>

    </section>
    <!-- ============================================== -->

    <?php the_content(); ?>

<?php get_footer(); ?>