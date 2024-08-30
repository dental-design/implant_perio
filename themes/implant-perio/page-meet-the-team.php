<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- content builder -->
    <?php get_template_part('content-builder/index'); ?>

    <!-- meet the team listing -->
    <?php get_template_part('template-parts/_team-member-listing'); ?>

<?php endwhile; ?>

<?php get_footer();