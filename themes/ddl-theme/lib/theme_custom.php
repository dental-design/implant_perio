<?php

// create global options fields for site wide content
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// allow svg uploads
function allow_svg_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'allow_svg_uploads');

function fix_svg_container($file)
{
    if ($file['type'] === 'image/svg+xml') {
        $file['type'] = 'image/svg+xml';
    }
    return $file;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_container', 10, 4);

// remove editor from all post types
add_action('init', 'remove_standard_editor_from_all_post_types');

function remove_standard_editor_from_all_post_types()
{
    $post_types = get_post_types(array('public' => true), 'names');

    foreach ($post_types as $post_type) {
        remove_post_type_support($post_type, 'editor');
    }
}

// Disable the block editor for all post types (posts, pages, and custom post types)
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Optionally: Disable the block editor for the classic widgets editor
add_filter('use_widgets_block_editor', '__return_false');

// Optional: Disable block editor for posts (already covered by the above filter)
add_filter('use_block_editor_for_post', '__return_false', 10);

// include template files
function include_file($atts)
{
    $a = shortcode_atts(array(
        'slug' => 'NULL',
    ), $atts);

    if ($a['slug'] != 'NULL') {
        ob_start();
        get_template_part($a['slug']);
        return ob_get_clean();
    }
}

function is_tree($pid)
{
    global $post;

    $ancestors = get_post_ancestors($post->$pid);
    $root = count($ancestors) - 1;
    $parent = $ancestors[$root];

    if (is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors))) {
        return true;
    } else {
        return false;
    }
}

add_shortcode('include', 'include_file');

// meta data and theme support
function default_features() {

    // meta title
    add_theme_support('title-tag');

    // thumbnail
    add_theme_support('post-thumbnails', [
        'post',
        'page',
        'team',
        'treatments'
    ]);

    // navigation menus - CMS
    register_nav_menu('headerMenuLocation', 'Header Menu');
}

add_action('after_setup_theme', 'default_features');

// google maps api
function defaultMapKey($api)
{
    $api['key'] = 'AIzaSyA2Yj0cZfmd380OOF1JZQfSZEAxt_NbAtI';

    return $api;
}

add_filter('acf/fields/google_map/api', 'defaultMapKey');

// custom REST API
// function custom_rest() {

//     // author name
//     register_rest_field('post', 'authorName', [
//         'get_callback' => function() {
//             return get_the_author();
//         }
//     ]);    
// }

// add ability to use breadcrumbs
function custom_breadcrumbs() {
    $delimiter = '<span class="text-white large-text semi-bold-text"> &gt; </span>';
    $home = 'Home'; // text for the 'Home' link
    $before = '<span class="current-page text-white large-text semi-bold-text">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    if (!is_home() && !is_front_page() || is_paged()) {
        echo '<div class="breadcrumb">';

        global $post;

        $homeLink = get_bloginfo('url');

        echo '<a class="text-white large-text semi-bold-text" href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

        if (is_category()) {

            $thisCat = get_category(get_query_var('cat'), false);

            if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');

            echo $before . single_cat_title('', false) . $after;

        } elseif ( is_single() && get_post_type() != 'treatments' ) {

            $cat = get_the_category(); 
            if ($cat) {
                $cat = $cat[0];
                echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            }
            echo $before . get_the_title() . $after;

        } elseif ( is_singular('treatments') ) {

            if ( $post->post_parent ) {

                $parent_id  = $post->post_parent;
                $breadcrumbs = array();

                while ($parent_id) {
                    $page = get_post($parent_id);
                    $breadcrumbs[] = '<a class="text-white large-text semi-bold-text" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id  = $page->post_parent;
                }

                $breadcrumbs = array_reverse($breadcrumbs);

                // echo treatment page as main parent
                echo '<a class="text-white large-text semi-bold-text" href="' . get_permalink('17') . '">' . get_the_title('17') . '</a>' . $delimiter;

                foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';

            }

            echo $before . get_the_title() . $after;

        } elseif (is_page() && !$post->post_parent) {

            echo $before . get_the_title() . $after;

        } elseif (is_page() && $post->post_parent) {

            $parent_id  = $post->post_parent;
            $breadcrumbs = array();

            while ($parent_id) {
                $page = get_post($parent_id);
                $breadcrumbs[] = '<a class="text-white large-text semi-bold-text" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }

            $breadcrumbs = array_reverse($breadcrumbs);

            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';

            echo $before . get_the_title() . $after;
        }

        echo '</div>';
    }
}

// remove admin bar on login
add_filter('show_admin_bar', '__return_false');
