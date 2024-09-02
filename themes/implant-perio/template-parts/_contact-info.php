<?php 
    $mapLocation = get_field('practice_map', 'option');
    $mapIcon = get_field('map_icon', 'option');
    $email = get_field('email_address', 'option');
    $emailIcon = get_field('email_icon', 'option');
    $telephone = get_field('contact_number', 'option');
    $telIcon = get_field('tel_icon', 'option');
?>

<div class="contact-info-bar flex-row">

    <!-- telephone - global acf -->
    <a href="tel:<?= str_replace(' ', '', $telephone); ?>" class="flex-row telephone contact-info-bar-item standard-text text-white" aria-label="practice telephone number">

        <!-- icon - global acf -->
        <div class="image-wrapper bg-green circle small">
            <img height="35" width="35" data-source="<?= esc_url(!empty($telIcon) ? wp_get_attachment_image_url($telIcon['id']) : get_theme_file_uri('assets/images/default-icon.png')); ?>" alt="<?= $telIcon['alt']; ?>">
        </div>

        <span class="item-text"><?= $telephone; ?></span>
    </a>

    <!-- email address - global acf -->
    <a href="mailto:<?= $email; ?>" class="flex-row telephone contact-info-bar-item standard-text text-white" aria-label="practice email address">

        <!-- icon - global acf -->
        <div class="image-wrapper bg-green circle small">
            <img height="35" width="35" data-source="<?= esc_url(!empty($emailIcon)) ? wp_get_attachment_image_url($emailIcon['id']) : get_theme_file_uri('assets/images/default-icon.png'); ?>" alt="<?= $emailIcon['alt']; ?>">
        </div>

        <span class="item-text"><?= $email; ?></span>
    </a>

    <!-- practice address - global acf -->
    <a href="https://www.google.com/maps?q=<?= $mapLocation['lat']; ?>,<?= $mapLocation['lng']; ?>" target="_blank" rel="noreferrer nofollow" class="flex-row telephone contact-info-bar-item standard-text text-white">

        <!-- icon - global acf -->
        <div class="image-wrapper bg-green circle small">
            <img height="35" width="35" data-source="<?= esc_url(!empty($mapIcon) ? wp_get_attachment_image_url($mapIcon['id']) : get_theme_file_uri('assets/images/default-icon.png')); ?>" alt="<?= $mapIcon['alt']; ?>">
        </div>

        <span class="item-text">Get map directions</span>
    </a>

</div>