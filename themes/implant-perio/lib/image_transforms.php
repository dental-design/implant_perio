<?php
// add image transforms
function register_custom_image_sizes() {
    // Array of custom image sizes - add custom size here and function will take care of adding a mobile size. 
    $custom_sizes = array(
        'pageBanner' => [1280, 630],
        'contactForm' => [640, 879],
        'imageTextColumn' => [576, 600],
        'ctaHero' => [1053, 539],
        'processHero' => [467, 365],
        'reviewMosaic' => [627, 742],
        'listingBlock' => [1920, 900],
    );

    // Loop through each size and register both desktop and mobile versions
    foreach ($custom_sizes as $name => $dimensions) {
        $desktop_width = $dimensions[0];
        $desktop_height = $dimensions[1];

        // Register desktop size
        add_image_size($name, $desktop_width, $desktop_height, true);

        // Register mobile size with width 600px and proportional height, unless that height is less than 500.
        $mobile_height = ($desktop_height / $desktop_width) * 480;
        add_image_size('mobile' . ucfirst($name), 480, $mobile_height < 480 ? 480 : $mobile_height, true);
    }

    // register image transforms that don't require a mobile image
    add_image_size('smallAvatar', 263, 269, true);
}

add_action('after_setup_theme', 'register_custom_image_sizes');

// include the mobile detect library to determine appropriate image sizes
function my_mobile_detect_setup() {
    global $detect;

    if (file_exists(WP_PLUGIN_DIR . '/tinywp-mobile-detect/mobile-detect.php')) {
        require_once WP_PLUGIN_DIR . '/tinywp-mobile-detect/mobile-detect.php';
        
        $mobile_detect = new TinyWP_Mobile_Detect;
        $detect = $mobile_detect->isMobile() && !$mobile_detect->isTablet();
        
    } else {
        $detect = false; // Default value if Mobile Detect library is not found
    }
}

add_action('init', 'my_mobile_detect_setup');