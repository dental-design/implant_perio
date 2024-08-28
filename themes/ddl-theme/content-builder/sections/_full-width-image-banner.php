<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileFullWidthImage';
    } else {
        $image_size = 'fullWidthImage';
    }

    $image = $args['image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $button = $args['button'];
?>

<section 
    class="full-width-image-banner bg-image" 
    <?php if (!empty($image)) : ?>
        style="background-image: url('<?= esc_attr(wp_get_attachment_image_url($image['id'], 'fullWidthImage')); ?>');"
    <?php endif; ?>
>
    <?php if (!empty($heading) or !empty($textContent)) : ?>
        <div class="content-wrapper bg-grey <?= !empty($image) ? 'overlay' : 'solid'; ?>">
            <div class="container large">

                <!-- heading -->
                <h2 class="main-heading"><?= $heading; ?></h2>
        
                <!-- text-content -->
                <p class="large-text"><?= $textContent; ?></p>
        
                <!-- button -->
                <a href="<?= $button['url']; ?>" class="button black-button large-pad"><?= $button['title']; ?></a>

            </div>
        </div>
    <?php endif; ?>
</section>

