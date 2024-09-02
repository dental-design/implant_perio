<?php 
    $openingHours = get_field('opening_hours_standard', 'option');
    $specialHours = get_field('opening_hours_special', 'option');
    $address = get_field('address', 'option');
    $mapLocation = get_field('practice_map', 'option');
    $email = get_field('email_address', 'option');
    $telephone = get_field('contact_number', 'option');

    // function to display opening hours - used as function to stop repeating code.
    function display_special_hours($hours) { ?>

        <div class="hours-container flex-row">
            
            <div class="days-column col">
                <?php foreach ($hours as $block) : ?>
                    <p class="day info-text text-white standard-text">
                        <?= esc_html($block['day']); ?>
                    </p>
                <?php endforeach; ?>
            </div>
            
            <div class="hours-column col">
                <?php foreach ($hours as $block) : ?>
                    <p class="hours info-text text-white standard-text">
                        <?= esc_html($block['opening_hours']); ?>
                    </p>
                <?php endforeach; ?>
            </div>

        </div>

<?php } ?>

<section class="map-section section bg-medium-grey">
    <div class="container xtra">
        <div class="wrapper flex-row">

            <!-- contact information -->
            <div class="info-wrapper bg-grey">
                <div class="contact-info">
                    <h2 class="text-white add-margin">Visit us</h2>

                    <!-- address - global acf -->
                    <p class="standard-text text-white address add-margin"><?= $address ?></p>

                    <!-- email address - global acf -->
                    <a aria-label="practice contact email address" class="info-link standard-text text-white" href="mailto:<?= $email; ?>"><?= $email; ?></a>

                    <!-- telephone number - global acf -->
                    <a aria-label="practice telephone number" class="info-link standard-text text-white" href="tel:<?= str_replace(' ', '', $telephone); ?>"><?= $telephone; ?></a>
                </div>

                <div class="opening-times">
                    <h2 class="text-white add-margin">Opening times</h2>

                    <div class="opening-hours">
                        <!-- standard hours -->
                        <div class="standard-hours">
                            <?php display_special_hours($openingHours); ?>
                        </div>
                        
                        <!-- special hours -->
                        <?php if (!empty($specialHours)) : ?>
                            <div class="special-hours">
                                <?php display_special_hours($specialHours); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- map -->
            <div class="map-wrapper bg-white">
                <div class="acf-map">
                    <div data-lat="<?= $mapLocation['lat'] ?>" data-lng="<?= $mapLocation['lng'] ?>" class="marker" id="map-marker" style="background-image: url('<?= esc_attr(get_theme_file_uri('assets/images/map-marker.png')) ?>');">
                        <?= $mapLocation['address']; ?>
                    </div>
                </div>

                <!-- get directions button - functions.php shortcode -->
                <div class="cta-button-wrapper">
                    <?php custom_cta_button('Get directions', 'https://www.google.com/maps?q=' . $mapLocation['lat'] . ',' . $mapLocation['lng'], 'get-directions'); ?>
                </div>
            </div>

        </div>
    </div>
</section>