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
 * Template Name: About
 * @package fiteenTen
 */

get_header();
$banner_img = get_field('banner_image');
?>

	<main id="primary" class="site-main">
	<?php get_template_part('template-parts/banner','mountains'); ?> 
	<section>
		<div class="wrap-tight">
			<div class="row-m two-cols">
				<div class="col">
					<p class="p-l">
						Louise Leighton's artist studio is based in Exeter in Devon. She often works as an interior designer in Morzine in France.
					</p>
				</div>
				<ul class="m-l-auto p-l col align-right" >
					<li>
						079 XXX XXX
					</li>
					<li>
						<a href="mailto:">lldesign@hotmail.co.uk</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/form', 'contact'); ?>
	</main><!-- #main -->

<?php
get_footer();
