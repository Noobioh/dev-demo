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

	<?php

	$image = get_field('header_image');
	echo wp_get_attachment_image($image,  'full');
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
