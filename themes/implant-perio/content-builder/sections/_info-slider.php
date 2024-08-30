<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileInfoSlider';
    } else {
        $image_size = 'infoSlider';
    }

    $heading = $args['heading'];
    $infoSlides = $args['info_slide'];
?>

<section class="info-slider-section bg-black section">
    <div class="container small">

        <!-- heading -->
        <h2 class="center-text text-white main-heading add-margin large"><?= $heading; ?></h2>

        <!-- content slides -->
        <div class="info-slider-wrapper">
            <?php foreach($infoSlides as $block) : ?>

                <div class="info-slide">
                    <div class="slide-content-wrapper">

                        <!-- slide image -->
                        <div class="image-wrapper bg-image" style="background-image: url('<?= esc_attr(!empty($block['image']) ? wp_get_attachment_image_url($block['image']['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>');"></div>
    
                        <!-- slide text content -->
                        <div class="text-wrapper">
    
                            <?php if (!empty($block['heading'])) : ?>
                                <h3 class="base-text bold-text"><?= $block['heading'] ?></h3>
                            <?php endif; ?>
    
                            <p class="xtra-large-text semi-bold-text"><?= $block['text_content'] ?></p>
                    </div>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>