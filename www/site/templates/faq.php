<?php snippet('header') ?>


<?php 
    $titolo = $page->title();
    $descrizione = $page->text()->html();
    $faq = $page->faq()->toStructure();
?>


<?php snippet('footer') ?>
