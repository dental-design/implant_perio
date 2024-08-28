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

<?php 
}