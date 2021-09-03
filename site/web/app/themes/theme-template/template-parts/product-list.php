<?php 

$link = get_the_permalink() ?>
<li class="photo-card rel">
    <img <?php acf_responsive_img(get_post_thumbnail_id(), 'medium', '450px'); ?> alt="<?= esc_attr(get_the_title())?>" srcset=""  loading="lazy" />
    <div class="hover-card flex align-center justify-center">
        <h5 class="text-white text-center">
            <?= esc_html(get_the_title()); ?>
        </h5>
        <a href="<?= esc_url($link) ?>">
            <span>view product<i class="fa fa-caret-right"></i></span>
        </a>
    </div>
    <a href="<?= esc_url($link) ?>" class="mobile-link">
        view
    </a>
</li>