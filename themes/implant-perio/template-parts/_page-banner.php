<?php 

    $image = get_post_thumbnail_id();
    $homepageLinks = get_field('banner_links');

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobilePageBanner';
    } else {
        $image_size = 'pageBanner';
    }

?>

<section class="page-banner bg-medium-grey">
    <div class="banner-image bg-image container add-margin large" style="background-image: url('<?= esc_attr(has_post_thumbnail() ? wp_get_attachment_image_url($image, $image_size) : get_theme_file_uri('assets/images/default-image.jpg')) ?>');">
        <div class="image-banner-text-content center-text">

            <!-- site-logo -->
            <div class="site-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="168.648" height="182.273" viewBox="0 0 168.648 182.273">
                    <g id="Group_4204" data-name="Group 4204" transform="translate(0 0.001)">
                        <g id="Group_4193" data-name="Group 4193" transform="translate(0 -0.001)">
                            <g id="Group_4194" data-name="Group 4194" transform="translate(17.476 95.941)">
                                <path id="Path_8584" data-name="Path 8584" d="M58.455,84.168a28.425,28.425,0,0,1-2.513,5.125c-9.207,13.962-20.691,4.958-21.869,4.208-.241-.152-.346-.181-.715-.439l-.533-.381-1.09-.752L29.57,90.4a47.847,47.847,0,0,1-4.33-3.366c-.212-.173-.41-.358-.626-.523,2.933-.122,5.838-.379,8.736-.68a137.852,137.852,0,0,0,21.293-3.967q2.518-.677,5-1.448c-.377,1.242-.739,2.47-1.186,3.753" transform="translate(8.611 -10.714)" fill="#cff85d"/>
                                <path id="Path_8585" data-name="Path 8585" d="M70.873,87.5C64.609,98.618,55.1,92.6,55.1,92.6A11.23,11.23,0,0,0,56.51,91.8c3.6-2.5,19.966-18.948,19.966-18.948a48.115,48.115,0,0,1-5.6,14.652" transform="translate(40.922 -18.731)" fill="#cff85d"/>
                                <path id="Path_8586" data-name="Path 8586" d="M85.4,70l-.5,3.473a133.229,133.229,0,0,1-12.446,10.9c-3.716,2.871-14.394,11.03-16.464,12.17-1.611-1.257-4.247-3.2-5.557-4.4-.618-.571-1.217-1.156-1.833-1.734,1.557-.68,3.086-1.4,4.62-2.136A136.254,136.254,0,0,0,73.121,76.51,136.233,136.233,0,0,0,86.069,65.939c-.225,1.355-.424,2.7-.672,4.062" transform="translate(34.024 -26.056)" fill="#cff85d"/>
                                <path id="Path_8587" data-name="Path 8587" d="M125.377,60.525,123.2,66.567A134.177,134.177,0,0,1,108.34,77.948,136.692,136.692,0,0,1,79.885,92.315c-.867.313-1.741.655-2.626.96-1.646.564-3.314,1.079-4.989,1.586-1.419.422-2.849.816-4.282,1.195a137.185,137.185,0,0,1-35.522,4.622c-2.939,0-5.881-.115-8.835-.317l-.358-.459-.435-.546-.1-.146L22.589,99l-.177-.278-.725-1.106-1.446-2.229-2.876-4.445c-.608-.9-1.184-1.868-1.765-2.82,3.164.511,6.332.888,9.488,1.174A137.237,137.237,0,0,0,74.1,84.852c1.821-.519,3.623-1.061,5.421-1.65.426-.13.863-.253,1.287-.4.06-.021.128-.051.19-.072.27-.078.538-.157.812-.245.546-.192,1.081-.408,1.638-.612A136.959,136.959,0,0,0,108.923,69.7a134.577,134.577,0,0,0,17.715-12.911c-.414,1.24-.834,2.488-1.261,3.732" transform="translate(-0.942 -35.75)" fill="#cff85d"/>
                                <path id="Path_8588" data-name="Path 8588" d="M142.377,47.271c-.1.192-.295.63-.3.63l-.348.814-1.341,3.265-2.571,6.2a134.442,134.442,0,0,1-19.933,14.106A137.162,137.162,0,0,1,49.193,90.719a136.883,136.883,0,0,1-22.716-1.887q-5.219-.865-10.415-2.157C13.722,82.3,11.578,77.856,9.4,73.4l-.913-2.169c3.751,1.327,7.545,2.515,11.346,3.485a136.664,136.664,0,0,0,34.251,4.35,137.2,137.2,0,0,0,66.351-17.123A134.225,134.225,0,0,0,142.7,46.577Z" transform="translate(-8.484 -46.577)" fill="#cff85d"/>
                            </g>
                            
                            <path id="Path_8589" data-name="Path 8589" d="M168.55,53.008a35.807,35.807,0,0,1-2.029,9.459l-2.511,6.6c-1.248,3-2.744,6.307-4.184,9.426L146.481,89.84a125.439,125.439,0,0,1-13.642,10.073l1.3-4.072,1.071-3.366.257-.838.369-1.007.643-1.718,2.626-6.872,2.692-6.563c.941-2.243,1.714-4.268,2.5-6.28.762-2.1,1.633-3.9,2.323-6.223l2.19-6.707a17.484,17.484,0,0,0,.779-4.324,11.3,11.3,0,0,0-2.167-7.172,10.651,10.651,0,0,0-6.079-4.136,13.09,13.09,0,0,0-1.945-.418c-.674-.109-1.4-.058-2.082-.146-.583.1-.884.037-1.681.1l-1.728.373-.863.185-.089.021-.159.06C128.608,42.266,124.4,43.6,120.169,45l-6.622,2.416a8.772,8.772,0,0,1-7.675,8.769,8.9,8.9,0,0,1-7.731-2.976L84.3,37.186c-2.28-2.468-4.274-4.931-6.9-7.44l-3.747-3.739-.474-.468-.021-.033.041.047c.2.171-.2-.194-.13-.132l.078.08-.21-.181-.9-.727-1.745-1.485a38.51,38.51,0,0,0-15.589-7.858c-1.425-.179-2.818-.569-4.262-.651l-4.322-.087c-1.329.19-2.637.363-3.978.486a9.974,9.974,0,0,0-2.348.525l-2.55.715-1.277.354-.636.177-.078.029-.058.023-2.124.836a37.318,37.318,0,0,0-4.035,1.971A31.912,31.912,0,0,0,13.391,40.179,47.631,47.631,0,0,0,11.9,49.424L11.778,51.7a21.229,21.229,0,0,0-.126,2.439l.593,5.047,1.077,10.231c.468,3.4,1.151,6.762,1.7,10.155.494,3.4,1.409,6.727,2.2,10.071.81,3.343,1.572,6.711,2.686,9.978,1.051,3.275,1.971,6.612,3.154,9.844l1.959,5.178c-1.592-.494-3.209-1.02-4.9-1.613l-6.8-2.387c-1-2.651-1.914-5.327-2.886-8-1.3-3.382-2.239-6.865-3.209-10.355S5.172,85.345,4.509,81.776C3.767,78.231,2.933,74.7,2.293,71.126L.742,60.355.552,59l-.105-.669-.068-.84-.21-2.639C0,53.154.047,50.938,0,48.991A60.813,60.813,0,0,1,1.378,37.283,45.7,45.7,0,0,1,12.524,15.717,46.085,46.085,0,0,1,22.09,7.934a52.629,52.629,0,0,1,5.36-2.884l2.76-1.209.346-.157.762-.253.636-.2,1.254-.408,2.513-.814a16.179,16.179,0,0,1,2.787-.75C40.657.855,42.828.459,45,.142L51.247,0c2.08.051,4.163.449,6.227.692a54.144,54.144,0,0,1,22.384,9.9l2.371,1.833,1.186.915.3.237.07.058.231.237.091.113.414.443L88.287,18c2.6,2.258,4.948,5.127,7.574,7.743l4.688,5.774.822.906,1.123-.385,10.837-4.552c4.628-1.743,9.319-3.489,14.017-5.143l.22-.08.115-.039.678-.179.441-.1.847-.2,1.714-.406c1.52-.282,3.588-.507,5.335-.643a33.466,33.466,0,0,1,9.918,1.186,30.2,30.2,0,0,1,16.606,11.665,29.837,29.837,0,0,1,5.329,19.463" fill="#fff"/>
                        </g>
                    </g>
                </svg>
            </div>

            <!-- page heading -->
            <?php if (is_front_page()) : ?>
                <h1 class="text-white add-margin large">Implant <span class="text-green">+</span> Perio Clinic</h1>

                <?php if (!empty($homepageLinks)) : ?>
                    <div class="page-links-wrapper flex-row">
                        <?php foreach($homepageLinks as $post) : setup_postdata($post); ?>
                            
                            <a href="<?= esc_url(the_permalink()); ?>" class="button green-button transparent-button text-white"><?= !empty(get_field('listing_title')) ? get_field('listing_title') : get_the_title(); ?></a>

                        <?php 
                            endforeach; 
                            wp_reset_postdata(); 
                        ?>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <h1 class="text-white inner-main reg-text"><?= get_the_title(); ?></h1>

                <?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- hero content -->
    <div class="hero-container">
        <div class="container small center-text">

            <?php if (is_front_page()) : ?>

                <!-- cta text - functions.php shortcodes -->
                <?php custom_cta_button(get_field('cta_link')['title'], get_field('cta_link')['url'], 'page-banner-cta text-white center-text'); ?>

            <?php else : ?>

                <div class="hero-container-content">

                    <!-- heading -->
                    <?php if (!empty(get_field('heading'))) : ?>
                        <h2 class="text-white add-margin center-text"><?= get_field('heading'); ?></h2>
                    <?php endif; ?>

                    <!-- text content -->
                    <?php if (!empty(get_field('text_content'))) : ?>
                        <p class="text-white standard-text add-margin center-text"><?= get_field('text_content'); ?></p>
                    <?php endif; ?>

                    <!-- button links -->
                    <?php if (!empty(get_field('page_links'))) : ?>
                        <div class="page-links-wrapper flex-row">

                            <?php foreach (get_field('page_links') as $post) : setup_postdata($post); ?>

                                <a href="<?= esc_url(get_permalink()); ?>" class="button transparent-button page-banner-links-button text-white"><?= !empty(get_field('listing_title')) ? get_field('listing_title') : get_the_title(); ?></a>

                            <?php 
                                endforeach; 
                                wp_reset_postdata();
                            ?>

                        </div>
                    <?php endif; ?>

                    <!-- contact us page specifc info -->
                    <?php if (is_page(13)) : ?>
                        
                        <?php get_template_part('template-parts/_contact-info'); ?>

                    <?php endif; ?>
                </div>

            <?php endif; ?>

        </div>
    </div>
</section>