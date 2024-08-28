<?php
    $heading = $args['heading'];
    $largeText = $args['large_text'];
    $textContent = $args['text_content'];
    $textOrientation = $args['text_orientation'];
?>

<section class="standard-text-container section">
    <div class="container <?= $textOrientation ? 'center-text small' : 'left-align large'; ?> ">

        <!-- heading -->
        <h2 class="main-heading add-margin"><?= $heading; ?></h2>

    </div>

    <div class="container <?= $textOrientation ? 'xtra-small' : 'large'; ?>">

        <!-- large text -->
        <p class="xtra-large-text"><?= $largeText ?></p>

        <!-- standard text content -->
        <div class="standard-text"><?= $textContent; ?></div>

    </div>
</section>
