<?php 
    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileCtaHero';
    } else {
        $image_size = 'ctaHero';
    }

    $image = $args['image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $button = $args['button'];
    $cta = $args['cta'];
?>

<section class="bg-grey cta-hero">
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

                <!-- button -->
                <?php if (!empty($button)) : ?>
                    <a href="<?= $button['url']; ?>" class="button transparent-button text-white"><?= $button['title'] ?></a>
                <?php endif; ?>

            </div>

            <!-- image and cta -->
            <div class="image-cta-container bg-grey">

                <!-- image -->
                <div class="image-wrapper">
                    <img data-source="<?= esc_url(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="<?= !empty($image['alt']) ? $image['alt'] : $heading; ?>" height="480" width="864" />
                </div>

                <!-- cta - functions.php shortcodes -->
                <div class="cta-wrapper center-text">
                    <?php custom_cta_button($cta['title'], $cta['url'], 'text-white center-text'); ?>
                </div>
                
            </div>
        </div>
    </div>
</section>