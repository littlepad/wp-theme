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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section>
<header>
<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<p class="meta"><?php the_date(); ?> <?php the_time() ?> <?php the_category(',') ?> &#8212; <?php the_tags(__('Tags: '), ', ', ' &#8212; '); ?> <?php the_author() ?> <?php edit_post_link(__('Edit This')); ?></p>
</header>

<div class="entryContent">
<?php the_content(__('[ → 続きを読む ]')); ?>

<?php if( is_single() ) : ?>
<?php endif; ?>

<?php comments_template(); // Get wp-comments.php template ?>
<p class="feedback"><?php wp_link_pages(); ?><?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></p>
</div>

</section>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<p class="navLink"><?php posts_nav_link(' | ', '&laquo; Newer Posts', 'Older Posts &raquo;'); ?></p>
</article>
</main>
</div>

<?php get_sidebar(); ?>

<p class="pageTop"><a href="#PAGETOP">GO TO PAGETOP</a></p>

<?php get_footer(); ?>
