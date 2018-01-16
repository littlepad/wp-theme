<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header();
?>

<div class="l-article">
<main>
<article>

<?php if ( is_category() ) { ?>
     <p><strong>“<?php single_cat_title() ?>”</strong> のアーカイブ</p>
<?php } elseif ( is_month() ) { ?>
     <p><strong><?php the_time('Y'); ?>年<?php the_time('n'); ?>月</strong> のアーカイブ</p>
<?php } ?>


<?php if ( is_single() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <p class="meta"><?php the_date(); ?> <?php the_time() ?> <?php the_category(',') ?> &#8212; <?php the_tags(__('Tags: '), ', ', ' &#8212; '); ?> <?php the_author() ?> <?php edit_post_link(__('Edit This')); ?></p>
  <div class="entryContent">
    <?php the_content(__('[ → 続きを読む ]')); ?>
    <?php comments_template(); // Get wp-comments.php template ?>
    <p class="feedback"><?php wp_link_pages(); ?><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></p>
  </div>
<?php elseif (have_posts()) : ?>
  <div class="m-list">
  <ul>
  <?php while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
  <?php endwhile; ?>
  </ul>
  </div>
<?php else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p class="navLink"><?php posts_nav_link(' | ', '&laquo; Newer Posts', 'Older Posts &raquo;'); ?></p>
</article>
</main>
</div>

<?php get_footer(); ?>
