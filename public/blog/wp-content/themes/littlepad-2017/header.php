<?php
/**
 * @package WordPress
 * @subpackage littlepad(html5)
 */
?>
<!DOCTYPE html>
<html lang="ja" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="UTF-8">
<meta name="google-site-verification" content="dAoMKS2N3ggOJyHL_yN34-m5NS7QkZfe1XYQ-dnOsNY">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
<meta name="author" content="littlepad">
<meta name="copyright" content="Copyright (C) littlepad">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<?php if( is_single() ) : /* ----- meta for SNS Buttons ----- */ ?>
<meta property="fb:app_id" content="142798865768146">
<meta property="og:title" content="<?php the_title() ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php the_permalink() ?>">
<meta property="og:site_name" content="<?php bloginfo('name') ?>">
<meta property="og:image" content="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5-responsive/images/ogimg.png">
<?php endif; ?>
<title><?php wp_title('|', true, 'right'); ?>littlepad blog</title>
<link href="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-2017/css/import.css" rel="stylesheet" type="text/css" media="screen,print">
<!--<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<script src="http://www.google.com/jsapi"></script>
<script>
google.load("jquery", "1.4");
</script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/common.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shCore.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushJScript.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushAS3.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushCss.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushXml.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushPlain.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushPhp.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushRuby.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/littlepad-html5/js/shBrushLua.js" type="text/javascript"></script>
<script type="text/javascript">
	SyntaxHighlighter.all();
</script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
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

<body id="PAGETOP">
<script type="text/javascript" src="http://fast.fonts.com/jsapi/e4928927-f0b8-49fa-9856-374587402d3a.js"></script>
<?php if( is_single() ) : ?>
<?php endif; ?>
<div id="container">

<header id="globalHeader">
<h1><a href="<?php bloginfo('url'); ?>">LITTLEPAD BLOG</a></h1>
<!-- /#globalHeader --></header>

<div id="contents">