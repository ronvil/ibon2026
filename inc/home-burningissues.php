<?php

  global $displayed_posts;

  if (!isset($displayed_posts)) {
      $displayed_posts = array();
  }

  $burningissue_1 = get_field('burning_issue_1');
  $burningissue_1_tag = get_term( $burningissue_1);
  $burningissue_1_slug = $burningissue_1_tag->slug;
  $burningissue_1_name = $burningissue_1_tag->name;

  $burningissue_2 = get_field('burning_issue_2');
  $burningissue_2_tag = get_term( $burningissue_2);
  $burningissue_2_slug = $burningissue_2_tag->slug;
  $burningissue_2_name = $burningissue_2_tag->name;

  $burningissue_3 = get_field('burning_issue_3');
  $burningissue_3_tag = get_term( $burningissue_3);
  $burningissue_3_slug = $burningissue_3_tag->slug;
  $burningissue_3_name = $burningissue_3_tag->name;  

  $burningissue_4 = get_field('burning_issue_4');
  $burningissue_4_tag = get_term( $burningissue_4);
  $burningissue_4_slug = $burningissue_4_tag->slug;
  $burningissue_4_name = $burningissue_4_tag->name;

  $burningissue_5 = get_field('burning_issue_5');
  $burningissue_5_tag = get_term( $burningissue_5);
  $burningissue_5_slug = $burningissue_5_tag->slug;
  $burningissue_5_name = $burningissue_5_tag->name;

  $burningissue_6 = get_field('burning_issue_6');
  $burningissue_6_tag = get_term( $burningissue_6);
  $burningissue_6_slug = $burningissue_6_tag->slug;
  $burningissue_6_name = $burningissue_6_tag->name;

  $issues = [];

  for ($i = 1; $i <= 6; $i++) {
      $term_id = get_field("burning_issue_$i");

      if ($term_id) {
          $term = get_term($term_id, 'post_tag');

          if ($term && !is_wp_error($term)) {
              $issues[] = $term;
          }
      }
  }
  
?>

<section class="burningissues home__section">
  <div class="burningissues__container container">

    <h1 class="home__sectiontitle"><a href="#" class="">Burning Issues</a></h1>

    <div class="burningissues__cardcontainer">

      <?php foreach ($issues as $issue) : 

          $query = new WP_Query([
              'tag' => $issue->slug,
              'posts_per_page' => 1,
              'post__not_in' => $displayed_posts
          ]);

          if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); $displayed_posts[] = get_the_ID(); ?>

                  <div class="burningissues__card">

                      <div class="burningissues__tagcontainer">
                          <a href="<?php echo get_tag_link($issue->term_id); ?>">
                              <?php echo esc_html($issue->name); ?>
                          </a>
                      </div>

                      <div class="burningissues__thumb">
                          <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail(); ?>
                          </a>
                      </div>

                      <div class="burningissues__text">
                          <h2>
                              <a href="<?php the_permalink(); ?>">
                                  <?php the_title(); ?>
                              </a>
                          </h2>
                          <?php the_excerpt(); ?>
                      </div>

                  </div>

              <?php endwhile;
              wp_reset_postdata();
          endif;

      endforeach; ?>

</div>

  </div>
</section>