<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<div id="side">

<section id="about">
<h4><a href="http://littlepad.net/blog/about">about</a></h4>
<p class="text">ハンドルネーム：littlepad<br />
都内で WEB 制作（デザイン, html/css, Flash, MT, WordPress etc）をしているBOØWY研究家</p>
</section>

<section>
<h4>category:</h4>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>
</section>

<section>
<h4>search:</h4>
<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
<div>
<input type="text" name="s" id="s" size="15" /><br />
<input type="submit" value="<?php esc_attr_e('Search'); ?>" />
</div>
</form>
</section>

<section>
<h4>archives:</h4>
<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
<option value=""><?php echo attribute_escape(__('Select Month')); ?></option> 
<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
</select>
</section>

<!-- /#side --></div>