<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow" />
<link rel="stylesheet" type="text/css" href=" <?php bloginfo('stylesheet_url'); ?>"  type="text/css"media="all"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Original+Surfer' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src=" <?php bloginfo('template_directory');?>/script_.js" type="text/javascript"></script>
<!-- Remy Sharp Shim -->
<!-- [if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif -->
<title><?php bloginfo('template_directory');?> | <?php bloginfo('name');?> </title>
<!--Start WP Head -->
<?php wp_head();?>
<!--End WP Head-->
</head>

<body <?php body_class(); ?>>
<div id="wrapper"> 
<header>
<a href="shorefunrent.html" title="Welcome to Shore Fun Rentals">
<img class="logo" src="http://placehold.it/250x150" alt="Shore Fun Rentals"/></a>
	
<h1>Welcome to Shore Fun Rentals Located on Hunting Beach</h1><h3 class="tagline" >Your beach rentals headquarters</h3>
<br>
 <!-- START MAIN NAV -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' =>'navMenu',));?>
  <!-- END MAIN NAV -->
  