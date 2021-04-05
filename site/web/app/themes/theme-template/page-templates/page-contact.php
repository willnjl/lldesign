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
 * 
 * Template Name: contact
 * @package fiteenTen
 */

get_header();
$banner_img = get_field('banner_image');
?>

	<main id="primary" class="site-main">
	<?php get_template_part('template-parts/banner','mountains'); ?> 
	<?php get_template_part('template-parts/form', 'contact'); ?>
	</main><!-- #main -->

<?php
get_footer();
