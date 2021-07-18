<?php 

$img = get_field('banner_image');
?>

<section class="banner rellax-wrapper">
    <div class="wrap h-full">
        <div class="flex align-center h-full">
            <h1 class="text-secondary text-pink ">
                Louise Leighton
            </h1>
        </div>
    </div>
    <img <?php acf_responsive_img($img['id'], 'full', '1200px') ?> class="bg-img rellax" data-rellax-speed="-2" alt="Watercolour" srcset="">
</section>