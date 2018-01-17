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

      <?php if ( is_category() || is_tag() ) { ?>
        <p><strong>“<?php single_cat_title() ?>”</strong> のアーカイブ</p>
      <?php } elseif ( is_month() ) { ?>
        <p><strong><?php the_time('Y'); ?>年<?php the_time('n'); ?>月</strong> のアーカイブ</p>
      <?php } ?>

      <?php if ( is_single() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p class="m-attribute"><?php the_date(); ?> <?php the_time() ?> <?php edit_post_link(__('Edit This')); ?></p>
        <div class="entryContent">
          <?php the_content(__('[ → 続きを読む ]')); ?>
          <div class="m-attribute">
            <p>
              <span class="m-category-list">カテゴリー: <?php the_category(' ') ?></span>　<span class="m-tag-list"><?php the_tags(__('Tags: '), ' ', ''); ?></span>
            </p>
          </div>
        </div>
        <?php comments_template(); // Get wp-comments.php template ?>
        <p class="feedback"><?php wp_link_pages(); ?><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></p>
      <?php elseif (have_posts()) : ?>
        <h1>記事一覧</h1>
        <ul>
        <?php while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> <span class="m-attribute">(<?php the_time('Y年n月d日'); ?>)</span></li>
        <?php endwhile; ?>
        </ul>
      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      <p class="navLink"><?php posts_nav_link(' | ', '&laquo; Newer Posts', 'Older Posts &raquo;'); ?></p>
    </article>
  </main>
</div>

<?php get_footer(); ?>
