<?php 

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileCtaHero';
    } else {
        $image_size = 'ctaHero';
    }

    $beforeImage = $args['before_image'];
    $afterImage = $args['after_image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $cta = $args['cta'];
?>

<section class="bg-grey cta-hero before-after-image-block">
    <div class="container xtra">
        <div class="wrapper flex-row">

            <!-- text content -->
            <div class="bg-medium-grey text-wrapper">

                <!-- heading -->
                <?php if (!empty($heading)) : ?>
                    <h2 class="text-white add-margin"><?= $heading; ?></h2>
                <?php endif; ?>

                <!-- text -->
                <div class="standard-text text-white">
                    <?= $textContent; ?>
                </div>

            </div>

            <!-- image and cta -->
            <div class="image-cta-container bg-grey">
                
                <div class="image-wrapper image-container before-after">
                    <div class="image-overlay before-after-container">

                        <!-- before image -->
                        <div class="image fifty-image bg-image before-image" data-source="<?= esc_attr(!empty($beforeImage) ? wp_get_attachment_image_url($beforeImage['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>"></div>

                        <!-- after image -->
                        <div class="image fifty-image bg-image after-image" data-source="<?= esc_attr(!empty($beforeImage) ? wp_get_attachment_image_url($afterImage['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>"></div>

                        <!-- before after slider -->
                        <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider" />
                        
                        <div class='slider-button'>
                            <div class="slider-button-inner"></div>
                        </div>
                    </div>
                </div>

                <!-- cta - functions.php shortcodes -->
                <div class="cta-wrapper center-text">
                    <?php custom_cta_button($cta['title'], $cta['url'], 'text-white center-text'); ?>
                </div>
                
            </div>
        </div>
    </div>
</section>