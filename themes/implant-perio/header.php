<?php 
// declare global variables used in server side scripts across the site. 
global $detect; // used to determine if site is being viewed on a mobile device.
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes, width=device-width" />
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:image" content="<?= esc_url(get_theme_file_uri('/assets/images/share.png')); ?>">        
    
    <meta property="og:imageWidth" content="600" />
    <meta property="og:imageHeight" content="401" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= esc_url(site_url('/apple-touch-icon.png')); ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= esc_url(site_url('/favicon-32x32.png')); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= esc_url(site_url('/favicon-16x16.png')); ?>" />
    <link rel="mask-icon" href="<?= esc_url(site_url('/safari-pinned-tab.svg')); ?>" color="#232737" />
    <link rel="icon" href="<?= esc_url(site_url('/favicon.ico')); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- nav overlay -->
    <div class="body-overlay" id="nav-overlay"></div>

    <!-- navigation -->
    <section class="navigation-section bg-grey headroom-nav">

        <!-- nav -->
        <?php get_template_part('template-parts/_navigation'); ?>

        <!-- hamburger -->
        <div id="hamburger" class="hamburger hamburger--slider">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </section>

    <!-- page banner -->
    <header id="header" class="bg-grey">
        <?php get_template_part('template-parts/_page-banner'); ?>
    </header>

    <main>