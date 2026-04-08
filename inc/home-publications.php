<section class="publications home__section">
  <div class="publications__container container">

    <h1 class="home__sectiontitle"><a href="#" class="">Publications</a></h1>

    <div class="swiper">
      <div class="swiper-wrapper">

    <?php // 
      $the_query = new WP_Query( array(
        'category_name' => 'publications',
        'posts_per_page' => 10
      ) );
      
      if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <?php get_template_part( 'inc/component', 'publications' ); ?>
        
      <?php endwhile; wp_reset_postdata(); endif;
    ?>

      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>

  </div>
</section>