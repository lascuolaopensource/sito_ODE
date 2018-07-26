<?php snippet('header') ?>


<?php
    $titolo = $page->titolo()->html();
    $descrizione = $page->descrizione()->html();
    $galleria = $page->galleria()->toStructure();
    $prenotazione = $page->prenotazione();
    $mail = $page->mail();
?>

<?php snippet('footer') ?>
