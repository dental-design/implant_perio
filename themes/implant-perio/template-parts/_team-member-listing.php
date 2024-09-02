<?php
    // team member bios loaded into footer.php file.

    // wp query, get all team member items
    $teamMembers = new WP_Query([
        'post_type' => 'team', // custom post type
        'posts_per_page' => -1, // show all items on the page
    ]);

?>

<section class="meet-the-team section bg-grey">
    <div class="container large">

        <div class="wrapper listing-card-wrapper">
    
            <?php while ($teamMembers->have_posts()) : $teamMembers->the_post(); ?>
    
                <!-- output team member posts - functions.php shortcodes -->
                <?php listing_cards(
                    get_the_ID(),
                    get_post_thumbnail_id(get_the_ID()) ?  wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'teamMember') : get_theme_file_uri('assets/images/logo-avatar.png'),
                    !empty(get_field('listing_title')) ? get_field('listing_title') : get_the_title(),
                    get_field('job_title'),
                    'team-member-card',
                    'javascript:;',
                    'Read bio',
                    true
                ); ?>
    
            <?php 
            endwhile;     
            wp_reset_postdata();
            ?>
            
        </div>
        
    </div>
</section>