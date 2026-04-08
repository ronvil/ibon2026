<?php get_header(); ?>

  <main>

    <?php
      global $displayed_posts;

      if (!isset($displayed_posts)) {
      $displayed_posts = array();
      }
    ?>
    
    <?php get_template_part( 'inc/home', 'hero' ); ?>
    
    <?php get_template_part( 'inc/home', 'vitalsigns' ); ?>

    <?php get_template_part( 'inc/home', 'burningissues' ); ?>

    <?php get_template_part( 'inc/home', 'publications' ); ?>

    <div class="container gridcontainer">
      
      <div class="gridcontainer__main">

        <?php get_template_part( 'inc/home', 'content' ); ?>

        <?php get_template_part( 'inc/home', 'graphics' ); ?>

        <?php get_template_part( 'inc/home', 'photoquote' ); ?>

      </div>

      <div class="gridcontainer__aside">

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut id impedit architecto quisquam vero eligendi nesciunt saepe, accusantium minima nulla perspiciatis at explicabo ab vel pariatur praesentium, dignissimos mollitia quos hic nostrum adipisci similique vitae. Unde officiis nostrum modi asperiores, iure maiores voluptatem quasi illo blanditiis omnis perspiciatis eveniet quidem velit quaerat alias sit natus quam voluptatibus quibusdam illum! Voluptatem natus reiciendis, velit ut unde asperiores aliquid dicta. Perspiciatis quod eveniet, laudantium labore adipisci, reiciendis possimus explicabo necessitatibus voluptatem aperiam sunt nam atque et autem ipsa molestiae officiis blanditiis. Adipisci repellendus distinctio repellat rem maiores corrupti itaque quaerat? Cumque, molestias.</p>

      </div>

    </div>

  </main>

<?php get_footer( ); ?>