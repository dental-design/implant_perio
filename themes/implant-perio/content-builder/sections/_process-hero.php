<?php 
    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileProcessHero';
    } else {
        $image_size = 'processHero';
    }

    $images = $args['images'];
    $leftContent = $args['left_content'];
    $rightContent = $args['right_content'];

    $imageCounter = 1;
    $counter = 1;
?>

<section class="process-hero section large-bottom">
    <div class="container xtra">

        <!-- images - don't load on mobile -->
        <?php if (!empty($images) && !$detect) : ?>
            <div class="image-container flex-row">

                <?php foreach($images as $image) : ?>
                    <img data-source="<?= esc_url(wp_get_attachment_image_url($image['id'], $image_size)); ?>" alt="<?= !empty($image['alt'] ? $image['alt'] : 'Process image No.' . $imageCounter)?>" height="305" width="391" />

                    <?php $imageCounter++; ?>
                <?php endforeach; ?>

            </div>
        <?php endif; ?>

        <!-- text content -->
        <div class="text-content-container flex-row">

            <!-- left content -->
            <div class="text-content-wrapper content-left">
                <div class="text-inner">

                    <!-- heading -->
                    <?php if (!empty($leftContent['heading'])) : ?>
                        <h2 class="add-margin"><?= $leftContent['heading'] ?></h2>
                    <?php endif; ?>

                    <!-- list items -->
                    <div class="list-items">
                        <?php foreach($leftContent['list_items'] as $block) : ?>
                            
                            <div class="list-item flex-row">

                                <!-- count icon -->
                                <div class="count-icon bg-green circle">
                                    <p class="text-grey"><?= $counter; ?></p>
                                </div>

                                <!-- text -->
                                <p class="standard-text">
                                    <?= $block['list_item']; ?>
                                </p>
                            </div>

                            <?php $counter++; ?>
                        <?php endforeach; ?>
                    </div>
                    
                </div>
            </div>

            <!-- right content -->
            <div class="text-content-wrapper content-right">
                <div class="text-inner">

                    <!-- heading -->
                    <?php if (!empty($rightContent['heading'])) : ?>
                        <h2 class="text-white add-margin"><?= $rightContent['heading'] ?></h2>
                    <?php endif; ?>

                    <!-- text -->
                    <div class="standard-text text-white">
                        <?= $rightContent['text_content']; ?>
                    </div>

                    <!-- button -->
                    <?php if (!empty($rightContent['button'])) : ?>
                        <a href="<?= esc_attr($rightContent['button']['url']); ?>" class="transparent-button button text-white" aria-label="Process hero link button"><?= $rightContent['button']['title']; ?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>