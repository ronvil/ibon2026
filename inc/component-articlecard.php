<article class="articlecard">
  
  <div class="articlecard__thumb">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'full' ); ?>
    </a>
  </div>

  <div class="articlecard__text">
    <div class="articlecard__cat">
      <?php the_category( ' ' ); ?>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h2>
    <?php the_excerpt(); ?>
  </div>

</article>