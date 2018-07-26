<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $tariffario = $page->tariffario()->html();
    $dotazione = $page->dotazione()->html();
    $iscrizione = $page->iscrizione()->html();
    $mail = $page->mail();
?>


<?php snippet('footer') ?>
