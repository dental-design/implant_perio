<?php 

    // wp query, get all team member items
    $teamMembers = new WP_Query([
        'post_type' => 'team', // custom post type
        'posts_per_page' => -1, // show all items on the page
    ]);

?>

<div class="team-member-bios" id="team-bios">
    <?php while ($teamMembers->have_posts()) : $teamMembers->the_post();  ?>

        <div class="team-member-bio-card bg-white" data-team="<?= get_the_ID(); ?>">
            <!-- close icon -->
            <span class="close-icon bio-close-icon bg-black"><i class="fa-solid fa-xmark"></i></span>

            <div class="team-bio-top-content">
                
                <!-- profile image -->
                <img 
                    data-source="<?= get_post_thumbnail_id(get_the_ID()) ?  esc_attr(wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'smallAvatar')): esc_url(get_theme_file_uri('assets/images/logo-avatar.png')); ?>" 
                    alt="<?= esc_attr(get_the_title()); ?>" 
                    height="318" 
                    width="464" 
                />
    
                <!-- name -->
                <h2><?= get_the_title(); ?></h2>
    
                <!-- job title -->
                <p class="large-text bold-text job-title"><?= get_field('job_title'); ?></p>

                <!-- qualification -->
                <?php if (!empty(get_field('qualificiation'))) : ?>
                    <p class="standard-text qualification"><?= get_field('qualification'); ?></p>
                <?php endif; ?>

                <!-- GDC -->
                <?php if (!empty(get_field('gdc'))) : ?>
                    <a href="https://olr.gdc-uk.org/SearchRegister/SearchResult?RegistrationNumber=<?= get_field('gdc') ?>" target="_blank" class="standard-text bold-text gdc" rel="nofollow">GDC: <?= get_field('gdc'); ?></a>
                <?php endif; ?>
            </div>

            <!-- bio text -->
            <div class="bio large-text">
                <?= get_field('bio'); ?>
            </div>

        </div>
        
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>
