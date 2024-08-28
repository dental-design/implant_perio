<?php
    $heading = $args['heading'];
    $textContent = $args['text_content'];
?>

<section class="bg-black reviews-banner section">
    <div class="container">

        <!-- text content -->
        <div class="text-wrapper">
            <h2 class="text-white main-heading add-margin"><?= $heading; ?></h2>

            <p class="large-text text-white text-content add-margin"><?= $textContent; ?></p>

            <a href="<?= esc_url(get_permalink('226')); ?>" class="button text0white">Read more reviews</a>
        </div>

        <!-- reviews -->
        <div class="review-wrapper">
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-bf08bcf9-f94d-4178-8ef3-445ad43194e2" data-elfsight-app-lazy></div>
        </div>
    </div>
</section>