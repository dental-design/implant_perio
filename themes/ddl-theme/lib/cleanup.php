<?php
function cleanup_head() {
	// EditURI link.
	remove_action( 'wp_head', 'rsd_link' );
	// Category feed links.
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Post and comment feed links.
	remove_action( 'wp_head', 'feed_links', 2 );
	// Windows Live Writer.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Index link.
	remove_action( 'wp_head', 'index_rel_link' );
	// Previous link.
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Start link.
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Canonical.
	remove_action( 'wp_head', 'rel_canonical', 10, 0 );
	// Shortlink.
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	// Links for adjacent posts.
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version.
	remove_action( 'wp_head', 'wp_generator' );
	// Emoji detection script.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	// Emoji styles.
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

add_action( 'init', 'cleanup_head' );

/*
* Remove WP version from RSS Feed
*/
function remove_rss_wp_version() {
    return '';
}
add_filter( 'the_generator', 'remove_rss_wp_version' );

/*
* Remove Customize Link on the WP Admin Menu
*/
function remove_customize_link()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('customize');
}

add_action( 'wp_before_admin_bar_render', 'remove_customize_link' );

// Disable support for comments and trackbacks in post types
function disable_comments_post_types_support() {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'disable_comments_post_types_support');

// Close comments on the front-end
function disable_comments_status() {
    return false;
}
add_filter('comments_open', 'disable_comments_status', 20, 2);
add_filter('pings_open', 'disable_comments_status', 20, 2);

// Hide existing comments
function disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'disable_comments_admin_menu');

// Redirect any user trying to access comments page
function disable_comments_admin_menu_redirect() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function disable_comments_dashboard() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'disable_comments_dashboard');

// Remove comments links from admin bar
function disable_comments_admin_bar() {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'disable_comments_admin_bar');
