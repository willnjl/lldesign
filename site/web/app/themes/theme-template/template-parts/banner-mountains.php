<?php 

$img = get_field('banner_image');
?>

<section class="banner hero">
        <div class="wrap">
            <div class="vert-center">
                    <h1 class="span-secondary pink">
                        Louise Leighton
                    </h1>
            </div>
        </div>
        <img src="<?php echo esc_html($img['url']) ?>" class="rellax bg-img" alt="Watercolour" srcset="" data-rellax-speed="-3">
	</section>