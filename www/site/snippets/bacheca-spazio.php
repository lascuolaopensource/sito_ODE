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
    </div>
</div>

<div class="slideshow">
    <div class="container">
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="info_box">
            <div class="info_box_detail">
                <div class="nome">
                    <p><?= $descrizione ?></p>
                </div>
            </div>
        </div>
        <div class="info_box">
            <div class="info_box_detail">
                <div class="nome">
                    <p><?= $tariffario ?></p>
                </div>
            </div>
        </div>
    </div>
</div>