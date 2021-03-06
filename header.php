<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dev-demo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'dev-demo'); ?></a>

		<header id="masthead" class="site-header">

			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<div class="icon-img">
							<img src="<?= get_template_directory_uri() . '/resources/assets/images/logo-clr.svg?' ?>" alt="">
						</div>
					</div>

					<div class="col-lg-6">

						<ul class="menu">
							<li class="menu__main"><a class="menu__main--link-header">DIENSTEN</a></li>
							<li class="menu__main"><a class="menu__main--link-header">CASE STUDIES</a></li>
							<li class="menu__main"><a class="menu__main--link-header">MARKTEN</a></li>
							<li class="menu__main"><a class="menu__main--link-header">OVER RBK</a></li>
							<li class="menu__main"><a class="menu__main--link-header">CONTACT</a></li>
						</ul>

					</div>
				</div>
			</div>
		</header>
<!-- #masthead -->
