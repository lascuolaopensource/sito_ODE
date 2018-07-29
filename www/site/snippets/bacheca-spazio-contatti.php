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

<div class="slideshow">
    <div class="container">
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="info_box">
            <div class="info_box_title">
                <h1>hey</h1>
            </div>
            <div class="info_box_detail">
                <div class="nome">
                    <p>nome</p>
                </div>
            </div>
        </div>
        <div class="info_box">
            <?php foreach( $contatti as $contatto): ?>
            <div class="info_box_title">
                <p><?= $contatto->nome(); ?><p>
                <p><?= $contatto->mail(); ?><p>
                <p><?= $contatto->ruolo(); ?><p>
                <p><?= $contatto->tel(); ?><p>
            </div>
            <?php endforeach;?>
            <div class="info_box_detail">
                <div class="nome">
                    <p>nome</p>
                </div>
            </div>
        </div>
    </div>
</div>