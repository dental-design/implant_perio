<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileIntroContent';
    } else {
        $image_size = 'introContent';
    }

    $image = $args['image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
?>

<section class="intro-content-section">
    <div class="wrapper">

        <!-- text content -->
        <div class="text-container">
            <div class="text-wrapper">
    
                <!-- heading -->
                <h2 class="main-heading"><?= $heading; ?></h2>
    
                <!-- text content -->
                <div class="text-content-wrapper">
                    <?php foreach($textContent as $block) : ?>

                        <div class="text-content-card">
                            <?php if (!empty($block['heading'])) : ?>
                                <div class="heading-wrapper">

                                    <!-- heading -->
                                    <h3 class="xtra-large base-text"><?= $block['heading']; ?></h3>
                                    
                                </div>
                            <?php endif; ?>

                            <!-- text -->
                            <div class="large-text">
                                <?= $block['text_content'] ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
        </div>

        <!-- image -->
        <div class="image-container">
            <div class="image-overlay intro-content-image">
                <img src="<?= esc_url(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="<?= esc_attr($heading); ?> image" height="100%" width="100%" />
            </div>
        </div>
    </div>
</section>