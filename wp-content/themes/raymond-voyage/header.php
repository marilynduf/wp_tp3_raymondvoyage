<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/materialize.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site container">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'raymond-voyage' ); ?></a>

		<header id="masthead" class="site-header clearfix" role="banner">
			<div class="row flex">
				<div class="site-branding">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"></p>
					<?php
					endif; ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation valign-wrapper" role="navigation">
				<button class="menu-toggle valign" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'raymond-voyage' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			</div>
			<?php if ( is_front_page() ) : ?>
			<div class="row flex align-item-center column ">

				<div class="slogan row center">
					<?php echo get_bloginfo('description'); ?>
				</div>

				<div class="lien-forfait center row">
					<?php $link = get_post_type_archive_link('forfait'); ?>
					<a href="<?php echo $link ?>" class="btn button-forfait">Découvrez nos forfaits</a>
				</div>
			</div>
			<?php endif ?>

		</header>
	</div>

	<div id="content" class="site-content">
