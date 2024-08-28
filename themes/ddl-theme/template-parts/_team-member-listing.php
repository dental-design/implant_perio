<section class="meet-the-team section">
    <div class="wrapper">

        <?php 

        // wp query, get all team member items
        $teamMembers = new WP_Query([
            'post_type' => 'team',
            'posts_per_page' => -1,
        ]);

        // Initialize counter variables
        $counter = 0;
        $rowIndex = 0;

        // function below will output 3 team members per row. Every new row will either have a class of bg-grey or bg-white.
        while ($teamMembers->have_posts()) : $teamMembers->the_post(); 

            // Check if new row should be started
            if ($counter % 4 == 0) {

                // Close previous row div if not the first row
                if ($counter > 0) {
                    echo '</div></div>'; 
                }

                // Increment row index
                $rowIndex++;

                // Determine background color based on row index
                $bgColor = ($rowIndex % 2 == 0) ? 'bg-grey' : 'bg-white';

                // Start new row div
                echo '<div class="row ' . $bgColor . '"><div class="container">';
            }
        ?>

            <!-- output team member posts -->
            <a href="javascript:;" class="team-member-card center-text" data-team="<?= get_the_ID(); ?>" aria-label="team member card - <?= get_the_title(); ?>">
                <img 
                    src="<?= get_post_thumbnail_id(get_the_ID()) ?  esc_attr(wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'smallAvatar')): esc_url(get_theme_file_uri('assets/images/logo-avatar.png')); ?>" 
                    alt="<?= esc_attr(get_the_title()); ?>" 
                    height="263" 
                    width="263" 
                />

                <h2><?= get_the_title(); ?></h2>

                <?php if (!empty(get_field('job_title'))) : ?>
                    <p class="large-text"><?= get_field('job_title'); ?></p>
                <?php endif; ?>

                <span class="button transparent-button black">Read bio</span>
            </a>


        <?php 
        $counter++;

        // end team member loop, close last div and restore postdata to page default.
        endwhile; 

        echo '</div></div>';

        wp_reset_postdata();
        ?>
        
    </div>
</section>