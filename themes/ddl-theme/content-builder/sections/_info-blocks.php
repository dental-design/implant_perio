<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileInfoBlock';
    } else {
        $image_size = 'infoBlock';
    }

    $heading = $args['heading'];
    $blocks = $args['info_blocks'];
?>

<section class="section info-blocks-section">
    <div class="container large">

        <!-- heading -->
        <h2 class="center-text main-heading"><?= $heading ?></h2>

        <!-- info blocks -->
        <div class="info-block-wrapper">
            <?php 
            $index = 1;
            foreach($blocks as $block) : 
            ?>

                <div class="info-container-card">
                    <div class="image-wrapper">
                        <img src="<?= esc_url(!empty($block['image']) ? wp_get_attachment_image_url($block['image']['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')); ?>" alt="<?= $block['heading'] ?>" height="auto" width="auto" />
                    </div>

                    <div class="text-content">
                        <h3 class="header-text reg-text large"><?= $index ?>. <?= $block['heading'] ?></h3>

                        <div class="large-text info">
                            <?= $block['text_content'] ?>
                        </div>
                    </div>
                </div>

            <?php 
            $index++;
            endforeach; 
            ?>
        </div>
    </div>
</section>