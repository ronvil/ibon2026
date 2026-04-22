<div class="burningissues__card">

  <div class="burningissues__tagcontainer">
    <a href="#">Corruption</a>
  </div>

  <div class="burningissues__thumb">
    <a href="#">
      <?php the_post_thumbnail(); ?>
    </a>
  </div>

  <div class="burningissues__text">
    <h2><a href="<?php the_permalink( ); ?>"><?php the_title( ); ?></a></h2>
    <?php the_excerpt( ); ?>
  </div>

</div>