<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $tariffario = $page->tariffario()->html();
    $dotazione = $page->dotazione();
    $iscrizione = $page->iscrizione();
    $mail = $page->mail();
?>

<div class="container">
<?php snippet('footer-texture-tre'); ?>    
</div>
<section class="container cowo stretto">
    <h1 class="testata">
        <?= $page->title() ?>
    </h1>
    <p class="description"><?= $descrizione->kirbytext() ?></p>

    <div class="flexbox">
    <div class="elemento_cowo"><?= $tariffario->kirbytext()  ?></div>
    <div class="elemento_cowo"><?= $dotazione->kirbytext()  ?></div>
    </div>
    <div class="flexbox actions">
    <a class="more_events" href="<?= $iscrizione ?>" title="iscriviti">Iscriviti</a>

    <a class="more_events" href="mailto:<?= $mail ?>" title="scrivici">Scrivici</a>
    </div>
</section>


<?php snippet('footer') ?>
