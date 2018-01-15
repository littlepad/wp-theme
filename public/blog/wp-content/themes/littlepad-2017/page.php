<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
get_header();
?>

<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section>
<header>
<h2 id="aboutTitle"><?php the_title(); ?></h2>
</header>

<div class="aboutContent">
<?php the_content(); ?>
</div>

<ul id="snsList">
<li><a href="http://twitter.com/#!/litttlepad" target=_blank">Twitter</a></li>
<li><a href="http://littlepad.tumblr.com/" target="_blank">tumblr</a></li>
<li><a href="http://www.flickr.com/photos/litttlepad/" target="_blank">Flickr</a></li>
<li><a href="http://www.delicious.com/littlepad" target="_blank">delicious</a></li>
<li><a href="http://www.lastfm.jp/user/littlepad" target="blank">Last.fm</a></li>
</ul>

</section>

<?php endwhile; endif; ?>

<p class="navLink"><?php posts_nav_link(' | ', '&laquo; Newer Posts', 'Older Posts &raquo;'); ?></p>
<!-- /#main --></div>

<p class="pageTop"><a href="#PAGETOP">GO TO PAGETOP</a></p>

<?php get_footer(); ?>
