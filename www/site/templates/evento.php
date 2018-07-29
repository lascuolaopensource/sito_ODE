<?php snippet('header'); ?>
<div class="events_list">
<?php
    $bg = $page->cover()->toFile();    
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
    $nextdate = strtotime($page->nextdate());
    $appuntamenti = $page->appuntamenti()->toStructure();
    $ospiti = $page->ospiti()->html();
    $num_min = $page->num_min()->html();
    $num_max = $page->num_max()->html();
    $programma = $page->programma()->kirbytext();
    $audience = $page->audience()->yaml();
    //$image = $page->image()->toFile();
    ?>
    <div class="cover has_bg">
    <?= $bg ?>
    <div class="container cover_content">
        <h1 class="cover_title"><?= $titolo ?></h1>
        <hr>
        <div class="tagfilters">
            <a href="/eventi/tag:workshop" class="tag">#<?php echo $categoria ?></a>
        </div>
    </div>
</div>
    <h2 class="data">
        <?= date('d/m/Y', $nextdate) ?> 
    </h2>
<div class="flexbox">
    <div class="element">
    <p class="informations">Questa attività si svolge presso lo spazio <?= $page->luogo() ?> ed è curato da <?= $page->soggetto() ?>.</p>
    <?php if($prezzo->isNotEmpty()): ?>
    Questa attività dura <?= $durata ?> H ed ha un costo di <?= $prezzo ?> euro.
    <?php else: ?>
    Questa attività è gratuita.
    <?php endif; ?>
    </div>

    <div class="element">

    </div>
</div>

<?php snippet('footer'); ?>