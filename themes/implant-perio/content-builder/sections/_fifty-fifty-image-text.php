<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileFiftyfifty';
    } else {
        $image_size = 'fiftyfifty';
    }

    $image = $args['image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $backgroundColour = $args['background_colour'];
?>

<section class="fifty-fifty-section" style="background-color: <?= $backgroundColour ?>">
    <div class="wrapper">

        <!-- text content -->
        <div class="fifty-block text-block bg-black text-content top-right-curve">
            <div class="text-wrapper">
                <h2 class="text-white"><?= $heading ?></h2>
    
                <div class="text-white large-text text-content">
                    <?= $textContent ?>
                </div>
            </div>
        </div>

        <!-- image container -->
        <div class="fifty-block bg-image image-block">
            <img src="<?= esc_url(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>" alt="<?= $heading ?>">
        </div>

    </div>
</section>