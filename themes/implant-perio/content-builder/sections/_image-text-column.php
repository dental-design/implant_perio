<?php
    global $detect;

    $image = $args['image'];
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $button = $args['button'];
    $style = $args['button_style'];

    // image transforms
    if ($detect) {
        $image_size = 'mobileImageTextColumn';
    } else {
        $image_size = 'imageTextColumn';
    }
?>


<section class="image-text-columns <?php if ($style) echo 'bg-light-grey'; ?>">
    <div class="container full">
        <div class="wrapper flex-row">
    
            <!-- heading -->
            <div class="heading-container bg-grey <?php if ($style) echo 'quarter' ?>">
                <?php if ($heading) : ?>

                    <div class="heading-content flex-row">
                        <div class="plus-container"></div>

                        <h2 class="text-white"><?= $heading; ?></h2>
                    </div>

                <?php endif; ?>
            </div>
    
            <!-- image -->
            <div class="image-container <?php if ($style) echo 'quarter'; ?>">
                <div class="bg-image" data-source="<?= esc_url(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>"></div>
            </div>
    
            <!-- text content -->
            <div class="text-container <?php if ($style) echo 'half'; ?>">
                <div class="text-wrapper">
        
                    <!-- text content -->
                    <div class="standard-text">
                        <?= $textContent; ?>
                    </div>
        
                    <!-- button -->
                    <?php if (!empty($button)) : ?>
                        <?php if (!$style) : ?>

                            <a href="<?= esc_url($button['url']); ?>" class="button transparent-button"><?= esc_html($button['title']); ?></a>

                        <?php else : ?>

                            <!-- cta - functions.php shortcodes -->
                            <?php custom_cta_button($button['title'], $button['url'], 'center-text'); ?>
                            
                        <?php endif; ?>
                    <?php endif; ?>
    
                </div>
            </div>
        </div>
    </div>
</section>