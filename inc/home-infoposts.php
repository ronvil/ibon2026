<?php
global $displayed_posts;

if (!isset($displayed_posts)) {
    $displayed_posts = array();
}
?>

<div class="homecontent">
  <h1 class="home__sectiontitle"><a href="#" class="">Infoposts</a></h1>
  
  <?php // 
    $the_query = new WP_Query( array(
      'category_name' => 'infoposts',
      'post__not_in' => $displayed_posts,
      'posts_per_page' => 1
    ) );
    
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $displayed_posts[] = get_the_ID(); ?> 

      <?php get_template_part( 'inc/component', 'graphics' ); ?>
      
    <?php endwhile; wp_reset_postdata(); endif;
  ?>

</div>