<?php
// Allow override, fallback to current post author
$author_id = $args['author_id'] ?? get_the_author_meta('ID');

$author_name = get_the_author_meta('display_name', $author_id);
$author_url  = get_author_posts_url($author_id);
$author_bio  = get_the_author_meta('description', $author_id);
?>

<?php if ($author_name !== 'IBON Foundation') : ?>

<div class="authorbox">
              
  <div class="authorbox__thumb">
    <a href="<?php echo esc_url($author_url); ?>">
      <?php echo get_avatar($author_id, 96); ?>
    </a>
  </div>

  <div class="'authorbox__text">
    <h6><a href="<?php echo esc_url($author_url); ?>"><?php echo esc_html($author_name); ?></a></h6>
    <?php if (!empty($author_bio)) { ?>
      <p class="author-bio"><?php echo esc_html($author_bio); ?></p>
    <?php } ?>
    <div class="authorbox__link"><a href="<?php echo esc_url($author_url); ?>">More from <?php echo esc_html($author_name); ?></a></div>
  </div>

</div>

<?php endif; ?>