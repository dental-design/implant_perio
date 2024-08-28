<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileBeforeAfter';
    } else {
        $image_size = 'beforeAfter';
    }

    $beforeImage = $args['before_image'];
    $afterImage = $args['after_image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $button = $args['button'];
    $imagePosition = $args['image_position'];
    $backgroundColour = $args['background_colour'];

    // cycle through the checkbox options to determine layout classes.
    $positionClass = '';

    if (!empty($imagePosition) && is_array($imagePosition)) {
        foreach ($imagePosition as $position) {
            $positionClass .= strtolower($position) . ' ';
        }
    }
?>

<section class="image-text-columns before-after-image" style="background-color: <?= esc_attr($backgroundColour); ?>;">
    <div class="wrapper <?= !empty($positionClass) ? $positionClass : 'left '; ?>bottom small">

        <!-- image -->
        <div class="image-container">
            <div class="image-overlay before-after-container">

                <!-- before image -->
                <div class="image fifty-image bg-image before-image" style="background-image: url('<?= esc_attr(!empty($beforeImage) ? wp_get_attachment_image_url($beforeImage['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>');"></div>

                <!-- after image -->
                <div class="image fifty-image bg-image after-image" style="background-image: url('<?= esc_attr(!empty($beforeImage) ? wp_get_attachment_image_url($afterImage['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>');"></div>

                <!-- before after slider -->
                <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider" />
                
                <div class='slider-button'>
                    <div class="slider-button-inner"></div>
                </div>
            </div>
        </div>

        <!-- text content -->
        <div class="text-container">
            <div class="text-wrapper">
    
                <!-- heading -->
                <h2 class="main-heading"><?= $heading; ?></h2>
    
                <!-- text content -->
                <div class="standard-text">
                    <?= $textContent; ?>
                </div>
    
                <!-- button -->
                <?php if ($button) : ?>
                    <a href="<?= esc_url($button['url']); ?>" class="button black-button"><?= esc_html($button['title']); ?></a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>