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

    <meta property="og:title" content="<?= get_bloginfo('name') ?>">
	<meta property="og:image" content="<?= get_theme_file_uri('/assets/images/share.png'); ?>">		
    
    <meta property="og:imageWidth" content="600" />
	<meta property="og:imageHeight" content="401" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= site_url() ?>/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= site_url() ?>/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url() ?>/favicon-16x16.png" />
    <link rel="mask-icon" href="<?= site_url() ?>/safari-pinned-tab.svg" color="#232737" />
    <link rel="icon" href="<?= site_url() ?>/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="body-overlay"></div>

    <!-- navigation -->
    <section class="navigation-section bg-grey headroom-nav">
        <?php get_template_part('template-parts/_navigation'); ?>
    </section>

    <!-- page banner -->
    <header id="header" class="bg-grey">
        <?php get_template_part('template-parts/_page-banner'); ?>
    </header>

    <main>