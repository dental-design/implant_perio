<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileListingBlock';
    } else {
        $image_size = 'listingBlock';
    }

    $heading = $args['heading'];
    $listItems = $args['list_items'];
    $image = $args['image'];

    $counter = 1;
?>

<section class="listing-block bg-image section xtra-large-top no-bottom" data-source="<?= esc_attr(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.png')) ?>">
    <div class="container">
        <div class="wrapper bg-white">
            
            <!-- heading -->
            <h2 class="add-margin"><?= $heading; ?></h2>

            <!-- list items -->
            <div class="list-wrapper flex-row">
                <?php foreach($listItems as $block) : ?>

                    <div class="list-item flex-row">

                        <!-- count icon -->
                        <div class="count-icon bg-green circle">
                            <p class="text-grey"><?= $counter; ?></p>
                        </div>

                        <!-- list heading -->
                        <?php if (!empty($block['heading'])) : ?>
                            <h3 class="add-margin small"><?= $block['heading']; ?></h3>
                        <?php endif; ?>

                        <!-- text content -->
                        <p class="standard-text list-item-text"><?= $block['list_item'] ?></p>
                    </div>

                    <?php $counter++; ?>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
