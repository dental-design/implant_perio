<?php
    $heading = $args['heading'];
    $largeText = $args['large_text'];
    $textContent = $args['text_content'];
    $textOrientation = $args['text_orientation'];
?>

<section class="standard-text-container section">
    <?php if (!empty($heading)) : ?>
        <div class="container <?= $textOrientation ? 'center-text small' : 'left-align large'; ?> ">

            <!-- heading -->
            <h2 class="main-heading <?= (!empty($textContent)) || (!empty($largeText)) ? 'add-margin' : ''; ?>"><?= $heading; ?></h2>

        </div>
    <?php endif; ?>

    <?php if ((!empty($textContent)) || (!empty($largeText))) : ?>
        <div class="container <?= $textOrientation ? 'center-text small' : 'large'; ?>">

            <!-- large text -->
            <p class="xtra-large-text <?= !empty($textContent) ? 'add-margin' : '' ?>"><?= $largeText ?></p>

            <!-- standard text content -->
            <div class="standard-text"><?= $textContent; ?></div>

        </div>
    <?php endif; ?>
</section>
