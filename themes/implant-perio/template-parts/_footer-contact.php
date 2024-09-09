<?php 
    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileContactForm';
    } else {
        $image_size = 'contactForm';
    }

    $image = get_field('contact_form_image', 'options');
    $heading = get_field('contact_form_title', 'options');
?>

<section class="footer-contact-section">
    <div class="wrapper flex-row">

        <!-- image -->
        <div class="image-container">
            <img src="<?= esc_attr(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="Contact form image" height="670" width="480" />
        </div>

        <!-- contact form -->
        <div class="form-container">
            <div class="form-inner">

                <h2 class="main-heading add-margin large"><?= !empty($heading) ? $heading : 'Contact our team' ?></h2>

                <div class="form-wrapper">
                    
                    <!-- check for referral page - else show standard form -->
                    <?php 
                        if (is_page(524)) {
                            get_template_part('template-parts/_referral-form');
                        } else {
                            get_template_part('template-parts/_contact-form');
                        } 
                    ?>

                </div>
            </div>
        </div>

    </div>
</section>