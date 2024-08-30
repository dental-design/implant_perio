<section class="meet-the-team section bg-grey">
    <div class="container">

        <div class="wrapper">
    
            <?php 
    
            // wp query, get all team member items
            $teamMembers = new WP_Query([
                'post_type' => 'team',
                'posts_per_page' => -1,
            ]);

            while ($teamMembers->have_posts()) : $teamMembers->the_post(); 

            ?>
    
                <!-- output team member posts -->
                <a href="javascript:;" class="team-member-card bg-white center-text" data-team="<?= get_the_ID(); ?>" aria-label="team member card - <?= get_the_title(); ?>">
                    <img 
                        data-source="<?= get_post_thumbnail_id(get_the_ID()) ?  esc_attr(wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'teamMember')): esc_url(get_theme_file_uri('assets/images/logo-avatar.png')); ?>" 
                        alt="<?= esc_attr(get_the_title()); ?>" 
                        height="318" 
                        width="464" 
                    />
    
                    <h2><?= get_the_title(); ?></h2>
    
                    <?php if (!empty(get_field('job_title'))) : ?>
                        <p class="large-text"><?= get_field('job_title'); ?></p>
                    <?php endif; ?>
    
                    <span class="button black-button">Read bio</span>
                </a>
    
    
            <?php 
            endwhile;     
            wp_reset_postdata();
            ?>
            
        </div>
        
    </div>
</section>