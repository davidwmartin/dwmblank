<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css" />
<?php wp_head(); ?>
</head>
<body>
<!--[if lt IE 9]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'dwmblank'); ?></div><![endif]-->
<div class="wrapper">
	<header class="main-head">

			<div class="logo">
				<h2><a href="<?php bloginfo('url');?>">Home</a></h2>
			</div>
			<nav class="main-nav">
				<?php wp_list_pages(); ?>
			</nav>
			<div class="search">
				<?php get_search_form(); ?>
			</div>

	</header>