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
	<section class="photo-gallery">
		<div class="wrap">
			<h2 class="span-secondary gutter ">commisions & prints</h2>
			<?php 
				$args = array(
					'post_type' => 'products',
				);

				$q = new WP_Query($args);
			?>
			<ul class="grid">
				<?php if($q->have_posts()): while($q->have_posts()) : $q->the_post();  ?>
				<?php 
					$link = get_the_permalink() ?>
					<li class="photo-card">
						<a href="<?= $link ?>">
							<img src="<?= esc_html(get_the_post_thumbnail_url()) ?>" alt="<?= esc_attr(get_the_title())?>" srcset="" class="featured-img" />
							<div class="hover-card flex">
								<h5 class="white">
									<?= get_the_title(); ?>
								</h5>
								<span>view product<i class="fa fa-caret-right"></i></span>
							</div>
						</a>
					</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
	</section>
	</main><!-- #main -->

<?php
get_footer();
