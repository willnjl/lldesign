 <section class="banner hero">
        <div class="wrap">
            <div class="vert-center">
                    <h1 class="span-secondary pink">
                        Louise Leighton
                    </h1>
                    <h2>
                        <?= get_the_title(); ?>
                    </h2>
            </div>
        </div>
        <img src="<?php echo esc_html(get_the_post_thumbnail_url( $post->id,'full')) ?>" class="rellax bg-img" alt="Watercolour" srcset="" data-rellax-speed="-3">
	</section>
<section class="">
<div class="wrap">
    <?php if(have_rows("additional_images")) :?>
        <div class="gallery">
            <div class="row-m">
                <div class="side-column">
                    <div class="swiper-container gallery-thumbs side-column">
                        <ul class="swiper-wrapper flex-col">
                            <?php while(have_rows('additional_images')): the_row();?>
                            <?php $desc = get_sub_field('description'); $img = get_sub_field('image')  ?>
                            <li class="product-image swiper-slide">
                                <img src="<?= $img['sizes']['thumbnail'] ?>" alt=<?= esc_attr($desc) ?>  class="" />
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="swiper-container gallery-top">
                    <ul class="swiper-wrapper">
                        <?php while(have_rows('additional_images')): the_row();?>
                        <?php $desc = get_sub_field('description'); $img = get_sub_field('image')  ?>
                        <li class="swiper-slide">
                            <img src="<?= $img['url'] ?>" alt=<?= esc_attr($desc) ?> class="" />
                            <div class="hover-card">
                                <p>
                                    <?= $desc ?>
                                </p>
                                <p> 
                                    &copy; Louise Leighton Designs <?= date('Y') ?>
                                </p>
                            </div>
                        </li>
                        <?php endwhile;?>
                    </ul>
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
</section>

<section class="text-block-order">
    <div class="wrap">
        <div class="flex">
            <div class="m-l-auto align-right">
                <h3 class="span-secondary">
                    Order this piece
                </h3>
                <ul class="row-s purple p-l">
                    <?php 
                    $url = get_field('etsy_link');
                    if(isset($url)) : ?>
                    <li class="link link--order">
                        <a target="_blank" href="<?= esc_url($url) ?>">buy on etsy<i class="fa fa-caret-right"></i></a>
                    </li>
                    <?php endif ?>
                    <li class="link link--order">
                        <a href="">make an enquiry <i class="fa fa-caret-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="two-thirds">
        <?= the_content(); ?>
    </div>
</section>

<?php 

$args = array(
    'post_type' => 'products',
    'posts_per_page' => 4,
    'post__not_in' => $post->id
);

$q = new WP_Query($args); 

if($q->have_posts()) : ?>
<section class="further-work">
    <h4 class=" gutter span-secondary">
        further work
    </h4>
    <ul class="row-m">
        <?php while($q->have_posts()) : $q->the_post() ?>
        <li class="photo-card">
                <a href="<?= $link ?>">
                    <img src="<?= esc_html(get_the_post_thumbnail_url()) ?>" alt="<?= esc_attr(get_the_title())?>" srcset="" />
                    <div class="hover-card flex">
                        <span><?= the_title(); ?><i class="fa fa-caret-right"></i></span>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
<?php endif; ?>

<?php get_template_part('template-parts/form', 'contact'); ?>