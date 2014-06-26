<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="author" content="Marc Thoeni">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>

<!-- Functions -->
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>-->

<title><?php wp_title(); ?></title>
    
<?php wp_head(); ?>
<!-- i am a github test -->
    
</head>
<body <?php body_class(); ?>>
    
<header>
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Piz Salsiz" /></a>
</header>
    
<div id="main-container">
    <?php wp_nav_menu(array('container' => 'nav')); ?>
    
