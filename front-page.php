<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dev-demo
 */

get_header();
?>

<main id="primary" class="site-main">

<section class="header-image">
	<div class="container">
		<img class="header-image-style" src="<?= get_template_directory_uri() . '/resources/assets/images/header-img.jpg?', 'full' ?>" alt="">
	</div>
</section>

	<!--
	<section class="site-header">
		<div class="site-header__main">
			<h1><?php the_field('header_text'); ?></h1>
			<?php
			$image = get_field('header_image');
			echo wp_get_attachment_image($image,  'full');
			?>
			<div class="site-header__main--icons">
				<a href="https://hoogdesign.nl/" class="site-header__main--icons__icon">
					<div class="icon-img">
						<img src="<?= get_template_directory_uri() . '/resources/assets/images/scooter.svg?' ?>" alt="">
					</div>
					<div class="icon-text">
						<span>Scooter bois</span>
					</div>
				</a> <a href="https://hoogdesign.nl/" class="site-header__main--icons__icon">
					<div class="icon-img">
						<img src="<?= get_template_directory_uri() . '/resources/assets/images/scooter.svg?' ?>" alt="">
					</div>
					<div class="icon-text">
						<span>Scooter bois</span>
					</div>
				</a> <a href="https://hoogdesign.nl/" class="site-header__main--icons__icon">
					<div class="icon-img">
						<img src="<?= get_template_directory_uri() . '/resources/assets/images/scooter.svg?' ?>" alt="">
					</div>
					<div class="icon-text">
						<span>Scooter bois</span>
					</div>
				</a> <a href="https://hoogdesign.nl/" class="site-header__main--icons__icon">
					<div class="icon-img">
						<img src="<?= get_template_directory_uri() . '/resources/assets/images/scooter.svg?' ?>" alt="">
					</div>
					<div class="icon-text">
						<span>Scooter bois</span>
					</div>
				</a> <a href="https://hoogdesign.nl/" class="site-header__main--icons__icon">
					<div class="icon-img">
						<img src="<?= get_template_directory_uri() . '/resources/assets/images/scooter.svg?' ?>" alt="">
					</div>
					<div class="icon-text">
						<span>Scooter bois</span>
					</div>
				</a>
			</div>
		</div>
	</section>

-->

	<section class="actueel">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">

				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
