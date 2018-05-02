<?php
/**
 * The template for displaying the header.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta name="theme-color" content="#000000">
	<link rel="manifest" href="build/manifest.json">
	<link rel="shortcut icon" href="build/favicon.ico">
	<title>React App</title>
	<link href="/static/css/main.84ec40b6.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="page" class="os-l-container">

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">

				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
