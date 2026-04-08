<div class="photoquote__container">

  <?php // 
    $the_query = new WP_Query( array(
      'category_name' => 'photoquote',
      'posts_per_page' => 1
    ) );
    
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="photoquote__thumb">

        <?php the_post_thumbnail( 'full' ); ?>

      </div>

      <div class="photoquote__content">
        <?php the_content( ); ?>
      </div>
      
    <?php endwhile; wp_reset_postdata(); endif;
  ?>

</div>