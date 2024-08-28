<?php
    $heading = $args['heading'];
    $faqs = $args['faqs'];
?>

<section class="section faqs-section bg-grey">
    <div class="container small">

        <h2 class="main-heading center-text"><?= $heading ?></h2>

        <div class="faq-wrapper">

            <?php
            if ($faqs) : 
            foreach ($faqs as $faq) : 
            ?>

                <div class="faq-card">

                    <div class="question-button-wrapper accordion">
                        <h3 class="question small base-text"><?= $faq['question']; ?></h3>
                        
                        <div class="plus-wrapper">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>  

                    <div class="answer-wrapper">
                        <p class="answer large-text"><?= $faq['answer'] ?></p>
                    </div>

                </div>

            <?php
            endforeach;
            endif;
            ?>

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