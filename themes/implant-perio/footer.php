</main>

<footer id="footer">

    <!-- contact form -->
    <?php get_template_part('template-parts/_footer-contact'); ?>

    <!-- map section -->
    <?php get_template_part('template-parts/_map-section'); ?>

    <!-- footer bottom -->
    <section class="section footer-section bg-grey">
        <div class="container">
            <div class="footer-links-wrapper flex-row">

                <!-- privacy policy -->
                <a href="<?= esc_url(get_permalink('3')); ?>" class="footer-link text-white small-text">Privacy Policy</a>

                <span class="pipe"></span>

                <!-- complaints policy -->
                <a href="<?= esc_url(get_permalink('9')); ?>" class="footer-link text-white small-text">Complaints Policy</a>

                <span class="pipe"></span>

                <!-- GDC -->
                <a class="footer-link small-text text-white text-white" href="https://www.gdc-uk.org/" target="_blank" rel="noopener noreferrer">GDC</a>

                <span class="pipe"></span>

                <!-- CQC -->
                <a class="footer-link small-text text-white" href="https://www.cqc.org.uk/" target="_blank" rel="noopener noreferrer">CQC</a>

                <span class="pipe"></span>

                <!-- dental design link -->
                <a class="footer-link small-text text-white" href="https://dental-design.marketing/" target="_blank" rel="noopener noreferrer">Made with <i class="fa-solid fa-heart text-green"></i> by Dental Design</a>

                <span class="pipe"></span>
                
                <!-- site last updated -->
                <p class="text-white footer-text small-text">Site last updated: <?= date('F Y', strtotime(get_lastpostmodified('GMT'))); ?></p>

            </div>
        </div>
    </section>

</footer>

<!-- cookie policy -->
<!-- <?php get_template_part('template-parts/_cookie-policy'); ?> -->

<!-- team member bios -->
<?php get_template_part('template-parts/_team-member-bios'); ?>

<?php wp_footer(); ?>
</body>
</html>