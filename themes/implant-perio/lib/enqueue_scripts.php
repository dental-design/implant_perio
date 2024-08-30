<?php

// styles and scripts
function default_files() {

    // font awesome
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fa/css/all.min.css');

    // adobe font
    wp_enqueue_style('adobe-fonts', '//use.typekit.net/nqz2ogl.css');

    // google fonts
    // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', false );

    // slick styles
    wp_enqueue_style('slick', get_theme_file_uri('/assets/slick/slick.css'));
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/slick/slick-theme.css'));

    // main stylesheet
    wp_enqueue_style('default_main_styles', get_theme_file_uri('/build/style-main.css'));
    
    // google map
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyA2Yj0cZfmd380OOF1JZQfSZEAxt_NbAtI', null, '1.0', true);
    
    // scripts
    wp_enqueue_script('main_default_javascript', get_theme_file_uri('/build/bundle.js'), array('jquery'), '1.0', true);

    // fancybox
    wp_enqueue_script('fancybox', get_theme_file_uri('/assets/js/fancybox.js'), array('jquery'), '1.0', true);

    // add main site url as variable for js to grab. 
    wp_localize_script('main_default_javascript', 'mainSiteData', [
        'root_url' => get_site_url(),
        'theme_uri' => get_theme_file_uri(),
    ]);
}

add_action('wp_enqueue_scripts', 'default_files');