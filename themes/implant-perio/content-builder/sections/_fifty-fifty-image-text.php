<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileFiftyfifty';
    } else {
        $image_size = 'fiftyfifty';
    }
    
    $fiftyColumn = $args['fifty_column'];

    $index = 0;
?>

<section class="fifty-fifty-section">
    <div class="wrapper flex-row">
        
        <?php foreach ($fiftyColumn as $block) : ?>

            <div class="fifty-column <?= $index === 1 ? 'bg-medium-grey' : 'bg-white' ?>">

                <div class="inner-content">

                    <!-- image -->
                    <div class="image-wrapper">
                        <img data-source="<?= esc_url(!empty($block['image']) ? wp_get_attachment_image_url($block['image']['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="<?= !empty($block['image']['alt']) ? $block['image']['alt'] : $block['heading']; ?>" width="698" height="414" />
                    </div>
    
                    <!-- text content -->
                    <div class="text-wrapper">
    
                        <!-- heading -->
                        <?php if (!empty($block['heading'])) : ?>
                            <h2 class="<?= $index === 1 ? 'text-white' : '' ?> add-margin"><?= $block['heading']; ?></h2>
                        <?php endif; ?>
        
                        <!-- text -->
                        <div class="standard-text <?= $index === 1 ? 'text-white' : '' ?>">
                            <?= $block['text_content']; ?>
                        </div>
        
                        <!-- button -->
                        <?php if (!empty($block['button'])) : ?>
                            <a href="<?= $block['button']['url']; ?>" class="button transparent-button black-button"><?= $block['button']['title'] ?></a>
                        <?php endif; ?>
    
                    </div>

                </div>
            </div>

            <?php $index++; ?>
        <?php endforeach; ?>

    </div>
</section>