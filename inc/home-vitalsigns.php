<?php
  $vitalsign_1 = get_field('vital_sign_1');
  $vitalsign_2 = get_field('vital_sign_2');
  $vitalsign_3 = get_field('vital_sign_3');
  $vitalsign_4 = get_field('vital_sign_4');
  $vitalsign_5 = get_field('vital_sign_5');
  $vitalsign_6 = get_field('vital_sign_6');
?>

<section class="vitalsigns home__section">
  <div class="vitalsigns__container container">

    <h1 class="home__sectiontitle"><a href="#" class="">Vital Signs</a></h1>

    <div class="vitalsigns__cardcontainer">
      
      <?php // 
        $the_query = new WP_Query( array(
          'category_name' => 'infographics',
          'tag_id' => $vitalsign_1,
          'posts_per_page' => 1
        ) );
        
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'inc/component', 'vitalsignscard' ); ?>
          
        <?php endwhile; wp_reset_postdata(); endif;
      ?> 

      <?php // 
        $the_query = new WP_Query( array(
          'category_name' => 'infographics',
          'tag_id' => $vitalsign_2,
          'posts_per_page' => 1
        ) );
        
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'inc/component', 'vitalsignscard' ); ?>
          
        <?php endwhile; wp_reset_postdata(); endif;
      ?> 

      <?php // 
        $the_query = new WP_Query( array(
          'category_name' => 'infographics',
          'tag_id' => $vitalsign_3,
          'posts_per_page' => 1
        ) );
        
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'inc/component', 'vitalsignscard' ); ?>
          
        <?php endwhile; wp_reset_postdata(); endif;
      ?> 

      <?php // 
        $the_query = new WP_Query( array(
          'category_name' => 'infographics',
          'tag_id' => $vitalsign_4,
          'posts_per_page' => 1
        ) );
        
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'inc/component', 'vitalsignscard' ); ?>
          
        <?php endwhile; wp_reset_postdata(); endif;
      ?> 

      <?php // 
        $the_query = new WP_Query( array(
          'category_name' => 'infographics',
          'tag_id' => $vitalsign_5,
          'posts_per_page' => 1
        ) );
        
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'inc/component', 'vitalsignscard' ); ?>
          
        <?php endwhile; wp_reset_postdata(); endif;
      ?> 

      <?php // 
        $the_query = new WP_Query( array(
          'category_name' => 'infographics',
          'tag_id' => $vitalsign_6,
          'posts_per_page' => 1
        ) );
        
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part( 'inc/component', 'vitalsignscard' ); ?>
          
        <?php endwhile; wp_reset_postdata(); endif;
      ?> 
      
    </div>


  </div>
</section>