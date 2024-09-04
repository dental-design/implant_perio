<?php 

// cta function
function custom_cta_button($text, $href, $additional_class = '') { ?>

    <a href="<?= esc_url($href); ?>" class="cta-button header-text flex-row <?= esc_attr($additional_class); ?>">

        <!-- text -->
        <span class="cta-text">
            <?= esc_html($text); ?>
        </span>

        <!-- arrow -->
        <span class="cta-arrow bg-green">
            <svg xmlns="http://www.w3.org/2000/svg" width="36.109" height="29.742" viewBox="0 0 36.109 29.742">
                <path id="Path_8595" data-name="Path 8595" d="M35.256,12.793,23.369.906a2.91,2.91,0,0,0-4.219,4.01q.05.053.1.1l7.027,7.016H2.91a2.91,2.91,0,0,0,0,5.821h23.3l-6.962,6.972a2.91,2.91,0,0,0,4.116,4.113L35.256,17.053A2.889,2.889,0,0,0,36.108,15a.481.481,0,0,0,0-.072.481.481,0,0,0,0-.072,2.913,2.913,0,0,0-.852-2.058" transform="translate(0 -0.001)" fill="#606c68"/>
            </svg>
        </span>
    </a>

<?php }

// listing card function - used on treatment listing and team listing pages.
function listing_cards($id, $image, $title, $description, $cardClass, $cardLink, $buttonText, $dataSource = false) { ?> 
    <a 
        href="<?= $cardLink; ?>" 
        id="<?= strtolower(str_replace([' ', '.'], ['-', ''], $title)); ?>"
        class="listing-card bg-white center-text <?= $cardClass; ?>" 
        <?php if ($dataSource) : ?>data-team="<?= $id; ?><?php endif; ?>"
    >

        <!-- image -->
        <div class="image-wrapper">
            <img 
                data-source="<?= esc_attr($image); ?>" 
                alt="<?= esc_attr($title); ?>" 
                height="318" 
                width="464" 
            />
        </div>

        <div class="text-wrapper center-text">

            <!-- title -->
            <h2 class="team-heading add-margin center-text small"><?= $title; ?></h2>

            <!-- description -->
            <?php if (!empty($description)) : ?>
                <p class="standard-text"><?= $description; ?></p>
            <?php endif; ?>

            <!-- button -->
            <span class="button large-pad black-button transparent-button"><?= $buttonText; ?></span>
        </div>
    </a>
<?php }