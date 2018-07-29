<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $soggetti = $page->children()->visible();
?>


<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>

<section class="container cowo">
    <h1 class="testata">
        <?= $page->title() ?>
    </h1>
    <p class="description"><?= $descrizione->kirbytext() ?></p>

</section>


<?php snippet('footer') ?>


<?php snippet('footer') ?>
