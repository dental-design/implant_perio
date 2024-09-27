<?php

    $email = get_field('email_address', 'option');
    $telephone = get_field('contact_number', 'option');

?>

<div class="mobile-cta bg-grey">

    <!-- tel -->
    <div class="contact-item tel bg-green">
        <a href="tel:<?= $telephone; ?>" aria-label="company telephone number">
            <span>Call us</span>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17.138" height="14.116" viewBox="0 0 17.138 14.116">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_302" data-name="Rectangle 302" width="17.138" height="14.116" fill="#606c68"/>
                    </clipPath>
                </defs>

                <g id="Group_4321" data-name="Group 4321" clip-path="url(#clip-path)">
                    <path id="Path_8640" data-name="Path 8640" d="M16.732,6.072,11.091.43a1.381,1.381,0,0,0-2,1.9l.049.049,3.335,3.33H1.381a1.381,1.381,0,0,0,0,2.762h11.06l-3.3,3.309a1.381,1.381,0,0,0,1.954,1.952l5.641-5.641a1.371,1.371,0,0,0,.4-.977.229.229,0,0,0,0-.034.229.229,0,0,0,0-.034,1.383,1.383,0,0,0-.4-.977" transform="translate(0 0)" fill="#606c68"/>
                </g>
            </svg>

        </a>
    </div>

    <!-- email -->
    <div class="contact-item email bg-green">
        <a href="mailto:<?= $email; ?>" aria-label="company email">
            <span>Email us</span>

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17.138" height="14.116" viewBox="0 0 17.138 14.116">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_302" data-name="Rectangle 302" width="17.138" height="14.116" fill="#606c68"/>
                    </clipPath>
                </defs>
                
                <g id="Group_4321" data-name="Group 4321" clip-path="url(#clip-path)">
                    <path id="Path_8640" data-name="Path 8640" d="M16.732,6.072,11.091.43a1.381,1.381,0,0,0-2,1.9l.049.049,3.335,3.33H1.381a1.381,1.381,0,0,0,0,2.762h11.06l-3.3,3.309a1.381,1.381,0,0,0,1.954,1.952l5.641-5.641a1.371,1.371,0,0,0,.4-.977.229.229,0,0,0,0-.034.229.229,0,0,0,0-.034,1.383,1.383,0,0,0-.4-.977" transform="translate(0 0)" fill="#606c68"/>
                </g>
            </svg>
        </a>
    </div>
</div>