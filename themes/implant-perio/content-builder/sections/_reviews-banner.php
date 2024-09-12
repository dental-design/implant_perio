<?php
    $heading = $args['heading'];
    $textContent = $args['text_content'];
?>

<section class="reviews-banner section bg-grey large-bottom">
    <div class="container large">

        <!-- text content -->
        <div class="text-wrapper">
            <h2 class="text-white main-heading add-margin"><?= $heading; ?></h2>

            <p class="large-text text-white text-content add-margin"><?= $textContent; ?></p>
        </div>

        <!-- reviews -->
        <div class="review-wrapper">
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            
            <div class="elfsight-app-73916dd7-5d82-49a3-bb98-2e76376d2da8" data-elfsight-app-lazy></div>
        </div>
    </div>
</section>