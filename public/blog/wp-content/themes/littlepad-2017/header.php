<?php
/**
 * @package WordPress
 * @subpackage littlepad(html5)
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta name="google-site-verification" content="dAoMKS2N3ggOJyHL_yN34-m5NS7QkZfe1XYQ-dnOsNY">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
<meta name="author" content="littlepad">
<meta name="copyright" content="Copyright (C) littlepad">
<meta name="viewport" content="width=device-width">
<meta property="fb:app_id" content="142798865768146">
<meta property="og:title" content="<?php the_title() ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php the_permalink() ?>">
<meta property="og:site_name" content="<?php bloginfo('name') ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogimg.png">
<title><?php wp_title('|', true, 'right'); ?>littlepad blog</title>
<link rel="https://api.w.org/" href="https://littlepad.net/blog/wp-json/">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-3473745-7', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body>
<?php if( is_single() ) : ?>
  <header>
    <div class="l-header">
      <p class="l-header__title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a></p>
    </div>
  </header>
<?php else: ?>
  <header>
    <div class="l-header">
      <p class="l-header__title"><?php bloginfo('name') ?></p>
    </div>
  </header>
<?php endif; ?>
<div class="l-container">

<div class="l-content">
