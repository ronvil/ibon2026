<?php
/*
Template Name: Cover Page
Template Post Type: post
*/
?>
<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <article>
        
        <header class="singular__header singularheader">

          <div class="singularheader__bg">
            <?php the_post_thumbnail( 'full' ); ?>
          </div>

          <div class="singularheader__container container">
            
            <div class="singularheader__content">
              <div class="singularheader__catcontainer">
                <?php the_category( ' ' ); ?>
              </div>
              <h1><?php the_title( ); ?></h1>              
              
              <div class="meta">
                <?php if (get_the_author() !== 'IBON Foundation') : ?>

                  by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a> | 

                <?php endif; ?>
                
                <?php the_time('F j, Y'); ?>
              
              </div>


            </div>

          </div>
        </header>

        <div class="singular__contentcontainer container gridcontainer">
          <div class="singular__contentwrapper gridcontainer__main">

            <?php the_content(); ?>

            <div class="tagscontainer">
              <?php the_tags( '' , ' ' , '' ); ?>
            </div>

            <?php get_template_part( 'inc/component', 'authorbox' ); ?>

          </div>
      
    <?php endwhile; endif; ?>

          <aside class="gridcontainer__aside">
            
            <?php
              $related = get_related_posts_by_tags(null, [
                  'posts_per_page' => 4
              ]);

              if ($related && $related->have_posts()) : ?>
                  
                  <section class="relatedposts">
                      
                    <h3>Related Posts</h3>

                    <?php while ($related->have_posts()) : $related->the_post(); ?>

                      <?php get_template_part( 'inc/component', 'articlecard' ); ?>
                         
                    <?php endwhile; ?>

                  </section>

              <?php 
              endif;

              wp_reset_postdata();
            ?>

          </aside>


        </div>
      </article>

  </main>

<?php get_footer( ); ?>