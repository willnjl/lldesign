<?php

    $circles = get_field('circles');

?>

<div class="block-circles">
        <div class="circle circle-1 rellax" data-rellax-speed="-1" > 
            <img src="<?= $circles['main_image']['sizes']['large']?>" alt="" srcset=""class="bg-img">
        </div>
        <div class="circle circle-2 rellax" data-rellax-speed="1"   > 
            <img src="<?php echo $circles['second_image']['sizes']['large']?>" alt="" class="bg-img">
        </div>
</div>
