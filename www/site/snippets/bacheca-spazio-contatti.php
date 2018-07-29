<?php
    $spazio = page('spazi')->children()->find($slug);
    $titolo = $spazio->title();
    $descrizione = $spazio->descrizione()->kirbytext();
    $galleria = $spazio->galleria()->toStructure();
    $tariffario = $spazio->tariffario()->kirbytext();
    $dotazione = $spazio->dotazione()->kirbytext();
    $coworking = $spazio->coworking()->kirbytext();
    $contatti = $spazio->contatti()->toStructure();
?>
<div class="header">
    <div class="container">
        <h1>CONTATTI</h1>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="info_box">
            <div class="info_box_title">
                <p><?= $spazio->mail(); ?><p>
                <p><?= $spazio->tel(); ?><p>
                <p>Aperto dalle: <?= $spazio->ora_apertura()->html(); ?> alle <?= $spazio->ora_chiusura(); ?><p>
            </div>
            <div class="info_box_detail">
                <div class="nome">
                    <p>tocca "stampa" per stampare un promemoria</p>
                </div>
            </div>
        </div>
    </div>
</div>