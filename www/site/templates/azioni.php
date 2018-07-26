<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $azioni = $page->children()->visible();
?>


<?php snippet('footer') ?>
