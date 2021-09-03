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
 * Template Name: Homepage Template
 * @package fiteenTen
 */

get_header();
$banner_img = get_field('banner_image');
?>

	<main id="primary" class="site-main page-home">
	<?php get_template_part('template-parts/banner','mountains'); ?> 
	<section class="gutterless">
		<div class="wrap">
			<div class="row-l">
				<div class="p-l trans fade fade-in swipe-left flex-3">
					<?php echo the_content(); ?>

				</div>
				<div class="flex-2 ">
					<?php get_template_part('template-parts/block', 'circles'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="grid-products">
		<div class="wrap">
			<h2 class="text-secondary gutter ">commissions & prints</h2>
			<?php 
				$args = array(
					'post_type' => 'products',
					'posts_per_page' => -1
				);

				$q = new WP_Query($args);
			?>
			<ul class="grid">
				<?php if($q->have_posts()): while($q->have_posts()) : $q->the_post();  ?>
				<?php get_template_part('template-parts/product', 'list'); ?>
				<?php endwhile; endif; ?>
			</ul>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
