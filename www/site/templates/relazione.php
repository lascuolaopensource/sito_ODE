<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $location = $page->location();
    $cap = $page->cap()->html();
    $tel = $page->tel()->html();
    $email = $page->email()->html();
    $apertura = $page->apertura()->html();
    $note = $page->note()->html();
?>


<?php snippet('footer') ?>
