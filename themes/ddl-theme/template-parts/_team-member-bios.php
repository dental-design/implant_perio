<?php 

// wp query, get all team member items
$teamMembers = new WP_Query([
    'post_type' => 'team',
    'posts_per_page' => -1,
]);

?>

<div class="team-member-bios" id="team-bios">
    <?php while ($teamMembers->have_posts()) : $teamMembers->the_post();  ?>

        <div class="team-member-bio-card bg-white" data-team="<?= get_the_ID(); ?>">
            <!-- close icon -->
            <span class="close-icon bio-close-icon bg-black"><i class="fa-solid fa-xmark"></i></span>

            <div class="team-bio-top-content">
                <img 
                    src="<?= get_post_thumbnail_id(get_the_ID()) ?  esc_attr(wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'smallAvatar')): esc_url(get_theme_file_uri('assets/images/logo-avatar.png')); ?>" 
                    alt="<?= esc_attr(get_the_title()); ?>" 
                    height="263" 
                    width="263" 
                />
    
                <h2><?= get_the_title(); ?></h2>
    
                <p class="large-text bold-text job-title"><?= get_field('job_title'); ?></p>
                <p class="standard-text qualification"><?= get_field('qualification'); ?></p>
                <p class="standard-text bold-text gdc">GDC: <?= get_field('gdc'); ?></p>
            </div>

            <div class="bio large-text"><?= get_field('bio'); ?></div>
        </div>
        
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>
