<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : ?>
      
      <article>
        
        <header class="singular__header singularheader">
          <div class="singularheader__container container">
            
            <div class="singularheader__content">
              
              <h1><?php the_archive_title( ); ?></h1>

            </div>

          </div>
        </header>

        <div class="singular__contentcontainer container gridcontainer">
          <div class="singular__contentwrapper gridcontainer__main">

            <?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'inc/component', 'articlecard' ); ?>

      
    <?php endwhile; ?>

          </div>

    <?php endif; ?>

          <aside class="gridcontainer__aside">

          </aside>


        </div>
      </article>

  </main>

<?php get_footer( ); ?>