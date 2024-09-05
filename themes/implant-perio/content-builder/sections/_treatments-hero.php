<?php 
    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileTreatmentHero';
    } else {
        $image_size = 'treatmentHero';
    }

    $entries = $args['entries'];
    $image = $args['image'];
    $background = $args['background'];
?>

<?php if ($entries) : ?>

    <section class="treatments-hero <?= $background ? 'bg-medium-grey' : 'bg-grey'; ?>">
        <div class="wrapper flex-row">

            <!-- image -->
            <div class="image-container">
                <img data-source="<?= esc_url(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="<?= esc_attr(!empty($image['alt']) ? $image['alt'] : 'treatments hero side bar image'); ?>" height="365" width="480" />
            </div>

            <!-- treatments -->
            <div class="treatments <?= $background ? 'bg-medium-grey' : 'bg-grey'; ?>">
                <div class="treatments-inner flex-row">

                    <?php foreach($entries as $post) : setup_postdata($post); ?>
        
                        <a href="<?= esc_url(the_permalink()); ?>" class="treatment-card">
        
                            <div class="image-wrapper bg-green circle">
                                <img height="52" width="68" data-source="<?= esc_url(!empty(get_field('listing_icon')) ? wp_get_attachment_image_url(get_field('listing_icon')['id']) : get_theme_file_uri('assets/images/default-icon.png')); ?>" alt="<?= !empty($image['alt']) ? $image['alt'] : get_the_title(); ?>">
                            </div>
        
                            <!-- title -->
                            <h3 class="center-text text-white"><?= !empty(get_field('listing_title')) ? get_field('listing_title') : get_the_title(); ?></h3>
                        </a>
        
                    <?php endforeach; wp_reset_postdata(); ?>

                </div>
            </div>
        
        </div>
    </section>

<?php endif; ?>