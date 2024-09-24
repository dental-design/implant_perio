<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileInfoSlider';
    } else {
        $image_size = 'infoSlider';
    }

    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $infoSlides = $args['info_slide'];
?>

<section class="info-slider-section bg-medium-grey section">
    <div class="container">

        <!-- heading -->
        <?php if (!empty($heading)) : ?>
            <h2 class="center-text text-real-black add-margin small"><?= $heading; ?></h2>
        <?php endif; ?>

        <!-- text content -->
        <?php if (!empty($textContent)) : ?>
            <p class="center-text standard-text text-real-black add-margin large"><?= $textContent; ?></p>
        <?php endif; ?>

        <!-- content slides -->
        <div class="info-slider-wrapper">
            <?php foreach($infoSlides as $block) : ?>

                <div class="info-slide">
                    <div class="slide-content-wrapper">

                        <!-- slide image -->
                        <div class="image-wrapper bg-image" style="background-image: url('<?= esc_attr(!empty($block['image']) ? wp_get_attachment_image_url($block['image']['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>');"></div>
    
                        <!-- slide text content -->
                        <div class="text-wrapper">
    
                            <?php if (!empty($block['heading'])) : ?>
                                <h3 class="base-text"><?= $block['heading'] ?></h3>
                            <?php endif; ?>
    
                            <p class="standard-text"><?= $block['text_content'] ?></p>
                    </div>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>