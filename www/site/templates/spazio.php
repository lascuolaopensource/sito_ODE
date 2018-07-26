<?php snippet('header') ?>

<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $galleria = $page->galleria()->toStructure();
    $tariffario = $page->tariffario();
    $dotazione = $page->dotazione();
    $coworking = $page->coworking();
?>

<?php snippet('footer') ?>
