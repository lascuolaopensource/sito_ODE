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
    <div class="elemento_soggetto spazio">
    <a href="<?= $soggetto->link() ?>" title="<?= $soggetto->title() ?>" class="soggetto" ?><h2 class="nome"><?= $soggetto->title() ?></h2></a>
        <p class="description">
        <?= $soggetto->descrizione()->text() ?><br>
            <div class="flexbox">
                <?php if($soggetto->dotazione()->isNotEmpty()): ?>
                <p class="mini"><?= $soggetto->dotazione(); ?></p>
                <?php endif; ?>
                <?php if($soggetto->tariffario()->isNotEmpty()): ?>
                <p class="mini"><?= $soggetto->tariffario(); ?></p>
                <?php endif; ?>
                <?php if($soggetto->ora_apertura()->isNotEmpty() && $soggetto->ora_chiusura()->isNotEmpty()): ?>
                <p class="mini"><?= $soggetto->ora_apertura(); ?> — <?= $soggetto->ora_chiusura(); ?></p>
                <?php endif; ?>                
            </div>
        </p>
    </div>
<?php endforeach; ?>
</div>

<?php snippet('footer') ?>
