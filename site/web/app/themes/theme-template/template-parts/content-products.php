
<section class="banner rellax-wrapper">
    <div class="wrap h-full">
        <div class="flex align-center h-full">
            <h1 class="text-secondary text-pink ">
                <?= esc_html(get_the_title()); ?>
            </h1>
        </div>
    </div>
    <img <?php acf_responsive_img(get_post_thumbnail_id(), 'full', '1200px') ?> class="bg-img rellax" data-rellax-speed="-2" alt="<?= esc_html(get_the_title()); ?>" srcset="">
</section>
<section class="pb-0">
<div class="wrap">
    <?php if(have_rows("additional_images")) :?>
    <div class="swiper-container">
        <ul class="swiper-wrapper">
            <?php while(have_rows('additional_images')): the_row();?>
            <?php $desc = get_sub_field('description'); $img = get_sub_field('image')  ?>
            <li class="swiper-slide">
                <img src="<?= esc_url($img['url']); ?>" alt=<?= esc_attr($desc) ?> class="" />
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
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
       
    <?php endif; ?>
</div>
</section>

<section class="pb-0">
    <div class="wrap">
        <div class="flex">
            <div class="ml-auto align-right">
                <h3 class="text-secondary half-gut">
                    Order this piece
                </h3>
                <ul class="row-s purple p-l">
                    <?php 
                    $url = get_field('etsy_link');
                    if(!empty($url)) : ?>
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
    'post__not_in' => $post->id
);

$q = new WP_Query($args); 

if($q->have_posts()) : ?>
<section class="grid-products">
    <h4 class=" gutter span-secondary">
        further work
    </h4>
    <ul class="grid">
        <?php while($q->have_posts()) : $q->the_post() ?>
            <?php get_template_part('template-parts/product', 'list'); ?>
        <?php endwhile; ?>
    </ul>
</section>
<?php endif; ?>

<?php get_template_part('template-parts/form', 'contact'); ?>