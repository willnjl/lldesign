 <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fiteenTen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="sidenav-open">
	<div id="page" class="site">
	<header id="masthead" class="site-header header-pad">
		<div class="wrap">
			<div class="flex">
				<div class="site-branding" class="span-secondary">
					<a href="/">
 						Louise Leighton
					</a>				
				</div><!-- .site-branding -->
				<div class="sidenav">
						<nav id="site-navigation" class="main-navigation row-l">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'Menu 1',
											)
										);
									?>
						</nav>
				</div>
				<button class="hamburger hamburger--squeeze" type="button" id="navicon">
					<div class="container">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</div>
				</button>
			</div><!--flex -->
		</div> <!-- wrap -->
		<div class="bg-img" id="nav-mask"></div>
	</header><!-- #masthead -->
	