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
    $cta = $args['cta'];
?>

<section class="section info-blocks-section bg-grey large-pad">
    <div class="container xtra">

        <!-- heading -->
        <h2 class="center-text text-white add-margin large"><?= $heading ?></h2>

        <!-- info blocks -->
        <div class="info-block-wrapper">
            <?php 
            $index = 1;
            foreach($blocks as $block) : 
            ?>

                <div class="info-container-card flex-row bg-light-grey">

                    <!-- image -->
                    <div class="image-wrapper">
                        <img src="<?= esc_url(!empty($block['image']) ? wp_get_attachment_image_url($block['image']['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="<?= $block['heading'] ?>" height="437" width="475" />


                        <!-- number counter -->
                        <div class="count-icon bg-white circle">
                            <p class="text-green"><?= $index; ?></p>
                        </div>
                    </div>

                    <div class="text-content">
                        <div class="text-inner">

                            <!-- heading -->
                            <h3 class="header-text add-margin base-text"><?= $block['heading'] ?></h3>
    
                            <!-- text content -->
                            <div class="standard-text info">
                                <?= $block['text_content'] ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php 
            $index++;
            endforeach; 
            ?>
        </div>

        <!-- cta -->
        <?php if (!empty($cta)) : ?>
            <div class="cta-wrapper center-text">
                <?php custom_cta_button($cta['title'], $cta['url'], 'text-white center-text white-line'); ?>
            </div>
        <?php endif; ?>

    </div>
</section>