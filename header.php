<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title><?php bloginfo('name') ?><?php wp_title('-'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" itemprop="description" content=" <?php bloginfo('description'); ?> ">
	<link href="http://andrewoodleyjr.com/" rel="canonical" />
	<link href="http://s.w.org/" rel="dns-prefetch" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<?php $upload_dir = wp_upload_dir(); ?>
	<link href="<?php echo $upload_dir['baseurl']; ?>/32x32.png" rel="icon" sizes="32x32">
    <link href="<?php echo $upload_dir['baseurl']; ?>/192x192.png" rel="icon" sizes="192x192">
    <link href="<?php echo $upload_dir['baseurl']; ?>/180x180.png" rel="apple-touch-icon-precomposed">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body class="home blog" data-layout-structure="50">