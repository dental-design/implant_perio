<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- content builder -->
    <?php get_template_part('content-builder/index'); ?>

<?php endwhile; ?>

<?php get_footer();