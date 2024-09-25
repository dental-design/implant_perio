<?php 
    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileReviewMosaic';
    } else {
        $image_size = 'reviewMosaic';
    }

    $images = $args['images'];
    $sidebar = $args['sidebar'];
    $topText = $args['top_text'];
    $bottomText = $args['bottom_text'];
    $reviewHeading = $args['review_heading'];

    $imageCounter = 1;
?>

<section class="review-mosaic bg-grey">
    <div class="container xtra">
        <div class="wrapper flex-row">

            <!-- sidebar -->
            <div class="sidebar bg-grey">
                <?php if (!empty($sidebar)) : ?>

                    <!-- heading - WYSIWG field for the + span. Make sure you use an H2 in the CMS -->
                    <div class="sidebar-text text-white">
                        <?= $sidebar; ?>
                    </div>

                <?php endif; ?>
            </div>

            <div class="main-content">

                <!-- top content -->
                <div class="top-content flex-row">

                    <!-- image slider -->
                    <div class="slider-container small" id="review-mosaic-slider">
                        <?php foreach ($images as $image) : ?>
                            
                            <div class="image-slide">
                                <img loading="lazy" src="<?= esc_url(wp_get_attachment_image_url($image['id'], $image_size)); ?>" alt="<?= !empty($image['alt'] ? $image['alt'] : 'Process image No.' . $imageCounter)?>" height="742" width="627" />
                            </div>

                            <?php $imageCounter++; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- text content -->
                    <div class="text-container bg-white big">
                        <div class="text-container-inner">
                            
                            <!-- heading -->
                            <?php if (!empty($topText['heading'])) : ?>
                                <h2 class="add-margin"><?= $topText['heading']; ?></h2>
                            <?php endif; ?>
                            
                            <!-- text content -->
                            <div class="standard-text">
                                <?= $topText['text_content']; ?>
                            </div>

                            <!-- button -->
                            <?php if (!empty($topText['button'])) : ?>
                                <a href="<?= esc_attr($topText['button']['url']); ?>" class="transparent-button button" aria-label="<?= $topText['heading']; ?>"><?= $topText['button']['title']; ?></a>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

                <!-- bottom content -->
                <div class="bottom-content flex-row">

                    <!-- reviews - elfsight (Implant Perio) -->
                    <div class="reviews-container bg-medium-grey big">
                        <h2 class="text-white add-margin"><?= !empty($reviewHeading) ? $reviewHeading : 'What our patients say'; ?></h2>
                        
                        <div class="elfsight-app-363b032c-4c9a-4cff-8f26-eb9fa5cc196f" data-elfsight-app-lazy></div>
                    </div>

                    <!-- text content -->
                    <div class="text-container small bg-grey">
                        <div class="text-container-inner">

                            <!-- icon -->
                            <div class="image-wrapper bg-green circle add-margin">
                                <img height="52" width="68" data-source="<?= esc_url(!empty($bottomText['icon']) ? wp_get_attachment_image_url($bottomText['icon']['id']) : get_theme_file_uri('assets/images/default-icon.png')); ?>" alt="icon">
                            </div>
                            
                            <!-- heading -->
                            <?php if (!empty($bottomText['heading'])) : ?>
                                <h2 class="add-margin text-white header-text"><?= $bottomText['heading']; ?></h2>
                            <?php endif; ?>
                            
                            <!-- text content -->
                            <div class="standard-text text-white">
                                <?= $bottomText['text_content']; ?>
                            </div>

                            <!-- button -->
                            <?php if (!empty($bottomText['button'])) : ?>
                                <a href="<?= esc_attr($bottomText['button']['url']); ?>" class="transparent-button button text-white" aria-label="<?= $bottomText['heading']; ?>"><?= $bottomText['button']['title']; ?></a>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>