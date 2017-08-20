<?php
/**
 * @package WordPress
 * @subpackage Theme = WIN
 */
?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head id="<?php echo of_get_option('meta_headid'); ?>">

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		if (is_search())
			echo '<meta name="robots" content="index, follow" />';
	?>

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name="author" content="<?php the_author_meta('display_name'); ?>">
	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php
		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

    <!-- <link rel="shortcut icon" href="<?php echo get_template_directory(); ?>/img/ico/favicon.ico" type="image/x-icon" /> -->
    <!-- <link rel="apple-touch-icon" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-57x57.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-72x72.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-76x76.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-114x114.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-120x120.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-144x144.png" /> -->
    <!-- <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory(); ?>/img/ico/apple-touch-icon-152x152.png" /> -->

	<script src="https://chiptuneswin.com/blog/wp-content/themes/ChipWIN/js/css_browser_selector.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<div id="wrapper">
	
		<header id="header" role="banner">
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo('name'); ?>
				</a>
			</h1>

			<h2 class="description">
				<?php bloginfo( 'description' ); ?>
			</h2>
		</header>
		
		<nav id="nav" role="navigation">
			<?php wp_nav_menu( array('menu' => 'primary') ); ?>
		</nav>
