<?php
$entries = $args['entries'];

if ($entries) : ?>

    <section class="section treatments-listing">
        <div class="container xtra">
            <div class="wrapper">

                <?php foreach($entries as $post) : setup_postdata($post); ?>

                    <a href="<?= esc_url(the_permalink()); ?>" class="treatment-card listing-card">

                        <div class="image-wrapper">
                            <img height="263" width="263" src="<?= !empty(get_field('listing_image')) ? esc_url(wp_get_attachment_image_url(get_field('listing_image')['id'], 'smallAvatar')) : esc_url(get_theme_file_uri('assets/images/logo-avatar.png')); ?>" alt="<?= get_the_title(); ?>">
                        </div>

                        <!-- listing title will either take from ACF on treatment page or, if empty, will simply grab the title -->
                        <h2 class="center-text"><?= !empty(get_field('listing_title')) ? get_field('listing_title') : get_the_title(); ?></h2>

                        <?php if (!empty(get_field('listing_description'))) : ?>
                            <p class="large-text semi-bold-text center-text"><?= get_field('listing_description'); ?></p>
                        <?php endif; ?>

                        <span class="button black-button">See treatment</span>
                    </a>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            
            </div>
        </div>
    </section>

<?php endif; ?>