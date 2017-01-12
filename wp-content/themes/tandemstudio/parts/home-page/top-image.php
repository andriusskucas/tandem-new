<?php
/*
* Renders top image for main page with title text
*/
?>

<section class="top-img-section">
   <div class="top-img-section__background cf" data-image-big="<?php the_field('top-image-big'); ?>" data-image-small="<?php the_field('top-image-small'); ?>">

   </div>
    <h2 class="top-img-title">
        <?php the_field('top-image-text'); ?>
    </h2>
</section>
