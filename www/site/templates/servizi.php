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
</section>

<div class="container padding">
<?php foreach($page->children()->sortBy('title')->flip() as $soggetto): ?>
    <div class="elemento_soggetto">
    <a href="<?= $soggetto->link() ?>" title="<?= $soggetto->title() ?>" class="soggetto" ?><h2 class="nome"><?= $soggetto->title() ?></h2></a>
        <p class="description">
        <?= $soggetto->descrizione()->text() ?><br>
        <?php if($soggetto->touchpoint()->isNotEmpty()): ?>
            <div class="flexbox">
            <?php foreach($soggetto->touchpoint()->toStructure() as $contatto): ?><br>
                <a class="more_events" href="mailto:<?= $contatto->mail() ?>">@ <?= $contatto->nome()?></a>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        </p>
    </div>
<?php endforeach; ?>
</div>

<?php snippet('footer') ?>
