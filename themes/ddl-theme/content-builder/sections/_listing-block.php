<?php
    $heading = $args['heading'];
    $listItems = $args['list_items'];
    $backgroundColour = $args['background_colour'];
?>

<section class="listing-block section" style="background-color: <?= $backgroundColour ?>">
    <div class="container large">
        
        <!-- heading -->
        <h2 class="main-heading <?= $backgroundColour = '#0a000a' ? 'text-white' : ''; ?>"><?= $heading ?></h2>

        <!-- list items -->
        <div class="list-wrapper">
            <?php foreach($listItems as $block) : ?>

                <div class="list-item">
                    <span class="list-marker"></span>

                    <p class="large-text list-item-text <?= $backgroundColour = '#0a000a' ? 'text-white' : ''; ?>"><?= $block['list_item'] ?></p>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
