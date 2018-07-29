<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $tariffario = $page->tariffario()->html();
    $dotazione = $page->dotazione()->html();
    $iscrizione = $page->iscrizione()->html();
    $mail = $page->mail();
?>

<section class="container">
    <h1><?= $titolo ?></h1>
    <p><?= $descrizione ?></p>
    <p><?= $tariffario ?></p>
    <p><?= $dotazione ?></p>
    <a href="<?= $iscrizione ?>">Iscriviti</a>
    <a href="mailto:<?= $mail ?>">Scrivici</a>
</section>


<?php snippet('footer') ?>
