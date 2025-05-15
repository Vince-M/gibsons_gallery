<?php get_header(); ?>

  <!-- HERO SECTION START -->
  <section class="indexHero">
    <div class="hero-img">
      <img class="full-width" src="img/hero_artists.jpg" alt="">
    </div>
  </section>
  <!-- HERO SECTION END -->
  <main id="main" class="main" role="main">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>

  </main>

<?php get_footer(); ?>