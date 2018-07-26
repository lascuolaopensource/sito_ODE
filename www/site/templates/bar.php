<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $offerta = $page->offerta()->toStructure();
    $mail = $page->mail();
    $orario = $page->orario()->html();
?>


<?php snippet('footer') ?>
