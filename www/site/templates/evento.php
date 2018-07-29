<?php snippet('header'); ?>
<div class="events_list">
<?php
    $titolo = $page->title()->html();
    $luogo = $page->luogo()->yaml();
    $soggetto = $page->soggetto()->html();
    $categoria = $page->categoria();
    $cover = $page->cover()->html();
    $tags = $page->tags()->html();
    $prezzo = $page->prezzo()->html();
    $link = $page->link()->url();
    $paypal = $page->paypal()->html();
    $form_id = $page->form_id()->html();
    $excel_key = $page->excel_key()->html();
    $durata = $page->durata()->html();
    $deadline = $page->deadline()->html();
    $nextdate = $page->nextdate()->html();
    $appuntamenti = $page->appuntamenti()->toStructure();
    $ospiti = $page->ospiti()->html();
    $num_min = $page->num_min()->html();
    $num_max = $page->num_max()->html();
    $programma = $page->programma()->kirbytext();
    $audience = $page->audience()->yaml();
    //$image = $page->image()->toFile();
    ?>
    <div class="container">
        
        <div class="evento_singolo" id="<?= $titolo ?>_item" >
            <div class="info" style="background-image:url('<?= $page->image($cover)->url() ?>')">
                <div class="category"><?= $categoria ?></div>
                <h1><?= $titolo ?></h1>
                <p>Organizzato da: <?= $soggetto ?></p>
                <p>presso: <?= $luogo[0] ?></p>
                <p class="price">€<?= $prezzo ?></p>
                <p>a chi è rivolto: <?= $audience[0] ?></p>
                <div class="tags"><?= $tags ?></div>
            </div>
            <div class="detail">
                <div class="program">
                    <p><?= $programma ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php snippet('footer'); ?>