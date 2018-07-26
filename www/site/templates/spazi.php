<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $spazi = $page->children()->visible();
?>


<?php snippet('footer') ?>
