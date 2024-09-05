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
    class="full-width-image-banner full-image-section bg-image section xtra-large-top no-bottom" 
    data-source="<?= esc_attr(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')) ?>"
>
    <?php if (!empty($heading) or !empty($textContent)) : ?>
        <div class="container">
            <div class="wrapper bg-white">

                <!-- heading -->
                <h2 class="add-margin"><?= $heading; ?></h2>
        
                <!-- text-content -->
                <div class="standard-text"><?= $textContent; ?></div>
        
                <!-- button -->
                <?php if (!empty($button)) : ?>
                    <a href="<?= $button['url']; ?>" class="button transparent-button"><?= $button['title']; ?></a>
                <?php endif; ?>

            </div>
        </div>
    <?php endif; ?>
</section>

