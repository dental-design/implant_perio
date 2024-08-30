<?php 
    $heading = $args['heading'];
    $textContent = $args['text_content'];
    $iframe = $args['iframe_link'];
    $button = $args['button'];
?>

<section class="iframe-text-container bg-grey section">
    <div class="container small center-text">

        <!-- heading -->
        <?php if ($heading) : ?>
            <h2 class="center-text add-margin"><?= $heading; ?></h2>
        <?php endif; ?>

        <!-- text content -->
        <?php if ($textContent) : ?>
            <p class="center-text large-text"><?= $textContent; ?></p>
        <?php endif; ?>

        <!-- iframe -->
        <?php if ($iframe) : ?>
            <div class="iframe-wrapper">
                <iframe src="<?= esc_url($iframe); ?>" frameborder="0" width="100%" height="800" allowfullscreen></iframe>
            </div>
        <?php endif; ?>

        <!-- button -->
        <?php if ($button) : ?>
            <a class="button black-button" href="<?= esc_url($button['url']); ?>"><?= $button['title']; ?></a>
        <?php endif; ?>

    </div>
</section>