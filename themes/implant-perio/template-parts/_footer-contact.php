<?php 
    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileContactForm';
    } else {
        $image_size = 'contactForm';
    }

    $success_param = isset($_GET['contact-form-success']);
    $failure_param = isset($_GET['contact-form-failure']);

    $image = get_field('contact_form_image', 'options');
    $heading = get_field('contact_form_title', 'options');
    $email = get_field('email_address', 'option');
    $telephone = get_field('contact_number', 'option');
?>

<section class="footer-contact-section" id="footer-contact-section">
    <div class="wrapper flex-row">

        <!-- image - don't load on mobile -->
        <?php if (!$detect) : ?>
            <div class="image-container">
                <img src="<?= esc_attr(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')); ?>" alt="Contact form image" height="670" width="480" />
            </div>
        <?php endif; ?>

        <!-- contact form -->
        <div class="form-container">
            <div class="form-inner">

                <h2 class="main-heading add-margin large"><?= !empty($heading) ? $heading : 'Contact our team' ?></h2>

                <div class="form-wrapper">
                    
                    <!-- check if form has been sent and if form is successful or unsuccessful -->
                    <?php if ($success_param) : ?>

                        <p class="large-text light-text add-margin large">Success! Thanks for getting in touch. We'll get back to you as soon as possible</p>

                    <?php elseif ($failure_param) : ?>

                        <p class="large-text light-text add-margin large">The message <strong>failed to send</strong>. Please try again.<br /><br />If you need further help, you can get in touch with us by calling <a href="tel:<?= str_replace(' ', '', $telephone); ?>" aria-label="contact telephone number"><?= $telephone; ?></a> or via email at <a aria-label="practice contact email address" href="mailto:<?= $email; ?>"><?= $email; ?></a></p>

                    <?php endif; ?>

                    <!-- check for referral page - else show standard form -->
                    <?php if (is_page(524)) {
                        get_template_part('template-parts/_referral-form');
                    } else {
                        get_template_part('template-parts/_contact-form');
                    } ?>

                </div>
            </div>
        </div>

    </div>
</section>