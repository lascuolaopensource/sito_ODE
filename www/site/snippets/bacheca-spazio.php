<?php
    $spazio = page('spazi')->children()->find($slug);
    $titolo = $spazio->title();
    $descrizione = $spazio->descrizione()->kirbytext();
    $galleria = $spazio->galleria()->toStructure();
    $tariffario = $spazio->tariffario()->kirbytext();
    $dotazione = $spazio->dotazione()->kirbytext();
    $coworking = $spazio->coworking()->kirbytext();
?>
<div class="header">
    <div class="container">
        <h1><?= $titolo ?></h1>
        <p>Aperto dalle: <?= $spazio->ora_apertura()->html(); ?> alle <?= $spazio->ora_chiusura(); ?><p>
        <div class="info_box">
            <h1>Contattaci</h1>
            <p>Tocca su "CONTATTI"</p>
        </div>
        <div class="nome">
            <p><?= $descrizione ?></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="gallery">
        <?php foreach( $galleria as $img ): ?>
            <div class="gallery_item">
                <img src="<?= $spazio->image($img)->url() ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="eventi">
        <h1>Eventi in programma</h1>
        <?php
        $eventi = page('eventi')->children()->visible()->sortBy('data')->flip()->limit(3);
        snippet('events_list', array('list' => $eventi ) );
        ?>
    </div>
</div>