<?php

    // image transforms
    global $detect;

    if ($detect) {
        $image_size = 'mobileFullWidthImage';
    } else {
        $image_size = 'fullWidthImage';
    }

    $heading = $args['heading'];
    $image = $args['image'];
    $faqs = $args['faqs'];
?>

<section 
    class="section faqs-section bg-image"
    <?php if (!$detect) : ?>
        data-source="<?= esc_attr(!empty($image) ? wp_get_attachment_image_url($image['id'], $image_size) : get_theme_file_uri('assets/images/default-image.jpg')) ?>"
    <?php endif; ?>
>
    <div class="container xtra bg-white">

        <div class="faq-inner">

            <!-- section heading -->
            <h2 class=""><?= $heading ?></h2>
    
            <div class="faq-wrapper">
    
                <?php
                if ($faqs) : 
                foreach ($faqs as $faq) : 
                ?>
    
                    <div class="faq-card">
    
                        <!-- question -->
                        <div class="question-button-wrapper accordion">
                            <h3 class="base-text"><?= $faq['question']; ?></h3>
                            
                            <div class="plus-wrapper">
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>  
    
                        <!-- answer -->
                        <div class="answer-wrapper">
                            <p class="answer standard-text"><?= $faq['answer'] ?></p>
                        </div>
    
                    </div>
    
                <?php
                endforeach;
                endif;
                ?>
    
            </div>
        </div>

    </div>
</section>

<!-- Schema Markup -->
<?php if ($faqs) : ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                <?php foreach ($faqs as $index => $faq) : ?>
                    {
                        "@type": "Question",
                        "name": "<?= $faq['question']; ?>",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "<?= strip_tags($faq['answer']); ?>"
                        }
                    }<?php if ($index < count($faqs) - 1) ','; ?>
                <?php endforeach; ?>
            ]
        }
    </script>
<?php endif; ?>