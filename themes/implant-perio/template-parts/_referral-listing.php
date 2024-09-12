<section class="referral-listing section bg-grey">
    <div class="container large">

        <div class="wrapper listing-card-wrapper">
    
            <!-- output dentist referral page - functions.php shortcodes -->
            <?php listing_cards(
                524,
                get_post_thumbnail_id(524) ?  wp_get_attachment_image_url(get_post_thumbnail_id(524), 'teamMember') : get_theme_file_uri('assets/images/logo-avatar.png'),
                get_the_title(524),
                'Refer your patient for our specialist treatment',
                'referral-card',
                get_permalink(524),
                'learn more',
            ); ?>

            <!-- output patient self referral page - functions.php shortcodes -->
            <?php listing_cards(
                526,
                get_post_thumbnail_id(526) ?  wp_get_attachment_image_url(get_post_thumbnail_id(526), 'teamMember') : get_theme_file_uri('assets/images/logo-avatar.png'),
                get_the_title(526),
                'Refer yourself for our expert care',
                'referral-card',
                get_permalink(526),
                'learn more',
            ); ?>
        
    </div>
</section>