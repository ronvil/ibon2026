<?php
global $displayed_posts;

if (!isset($displayed_posts)) {
    $displayed_posts = array();
}
?>

<?php $the_query = new WP_Query( array(
    'posts_per_page'      => 1,
    'post__in'            => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
) );

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $displayed_posts[] = get_the_ID(); ?>

    <section class="hero">
      <div class="hero__container container">

        <div class="hero__content">

          <div class="hero_maincontent">
            <div class="hero__catcontainer">
              <?php the_category( ' ' ); ?>
            </div>
            <h1><a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a></h1>
            <?php the_excerpt(); ?>
          </div>

        </div>

        <div class="hero__thumb">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'full' ); ?>
          </a>
        </div>

      </div>
    </section>
    
<?php endwhile; wp_reset_postdata();  endif;
?>
