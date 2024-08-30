<?php 

function customRest() {
    register_rest_route('default/v1', 'search', [
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'searchResults',
    ]);
}

function dataRouting($results, $query) {
    return [
        'title' => get_the_title(),
        'url' => get_the_permalink(),
        'thumbnail' => get_post_thumbnail(),
    ];
}

function searchResults($data) {
    $mainQuery = new WP_Query([
        'post_type' => [
            'post',
            'page',
        ],
        's' => sanitize_text_field($data['term']),
        'posts_per_page' => '-1',
    ]);

    $results = [
        'generalInfo' => [],
    ];

    while($mainQuery->have_posts()) {
        $mainQuery->the_post();

        if (sanitize_text_field($data['term'])) {

            if (get_post_type() == 'post' or get_post_type() == 'page') {
                array_push($results['generalInfo'], [
                    'title' => get_the_title(),
                    'url' => get_the_permalink(),
                    'author' => get_the_author(),
                    'type' => get_post_type(),
                ]);
            } elseif (get_post_type() == 'placeholder') {
                array_push($results['placeholder'], [
                    'title' => get_the_title(),
                    'url' => get_the_permalink(),
                    'type' => get_post_type(),
                    'thumbnail' => get_the_post_thumbnail_url(0, 'landscape'),
                ]);
            } else {
                array_push($results['generalInfo'], [
                    'title' => get_the_title(),
                    'url' => get_the_permalink(),
                    'author' => get_the_author(),
                    'type' => get_post_type(),
                ]);
            }

        }
    }

    return $results;
}

add_action('rest_api_init', 'customRest');