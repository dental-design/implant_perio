<?php
$entries = $args['entries'];

if ($entries) : ?>

    <section class="section treatments-listing bg-grey">
        <div class="container large">
            <div class="wrapper listing-card-wrapper">

                <?php foreach($entries as $post) : setup_postdata($post); ?>

                    <!-- output treatment posts - functions.php shortcodes -->
                    <?php listing_cards(
                        get_the_ID(),
                        !empty(get_field('listing_image')) ?  wp_get_attachment_image_url(get_field('listing_image', 'avatar')) : get_theme_file_uri('assets/images/logo-avatar.png'),
                        !empty(get_field('listing_title')) ? get_field('listing_title') : get_the_title(),
                        get_field('listing_description'),
                        'treatment-card',
                        get_permalink(),
                        'Learn more'
                    ); ?>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            
            </div>
        </div>
    </section>

<?php endif; ?>