<?php
function custom_post_types() {
    
    // Team member post type
    register_post_type('team', [
        'has_archive' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => false,
        'labels' => [
            'name' => 'Team Members',
            'singular_name' => 'Team Member',
            'add_new_item' => 'Add New Team Member',
            'edit_item' => 'Edit Team Member',
            'all_items' => 'All Team Members',
        ],
        'menu_icon' => 'dashicons-id-alt',
        'show_in_rest' => false,
        'supports' => [
            'title',
            'thumbnail',
            'page-attributes', 
        ]
    ]);

    // Treatments post type
    register_post_type('treatments', [
        'has_archive' => false,
        'public' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => '', 
            'with_front' => false,
            'hierarchical' => true, 
        ],
        'labels' => [
            'name' => 'Treatments',
            'singular_name' => 'Treatment',
            'add_new_item' => 'Add New Treatment',
            'edit_item' => 'Edit Treatment',
            'all_items' => 'All Treatments',
        ],
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => false,
        'supports' => [
            'title',
            'thumbnail',
            'page-attributes',
        ],
    ]);

}

add_action('init', 'custom_post_types', 0);


