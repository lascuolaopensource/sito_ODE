<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $link = $page->link();
    $image = $page->image();
    $touchpoint = $page->touchpoint()->toStructure();
?>


<?php snippet('footer') ?>
