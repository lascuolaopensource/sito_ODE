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
    <div class="container">
        <div class="cover has_bg">
            <?= $bg ?>
            <div class="cover_content">
                <h2 class="data">
                    <?= date('d/m', $nextdate) ?> 
                </h2>
                <h1 class="cover_title"><?= $titolo ?></h1>
                <hr>
                <div class="tagfilters">
                    <p class="tag">#<?php echo $categoria ?></p>
                </div>
            </div>
        </div>
            <div class="margini">
                <div class="flex_sidebar_layout">
                    <div class="content">
                        <p class="informations">Questa attività si svolge presso lo spazio <?= $page->luogo() ?> ed è curato da <?= $page->soggetto() ?>.<br><br>
                        <?php if($prezzo->isNotEmpty()): ?>
                        <strong>Dettagli:</strong><?= $durata ?> H / costo <?= $prezzo ?> euro.
                        <?php else: ?>
                        Questa attività è gratuita.
                        <?php endif; ?><br><br>
                        </p>
                        
                        <div class="contenuto">
                        <?= $page->programma()->kirbytext(); ?>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="sticky_info">
                            <h1>informazioni</h1>
                            <?php if($prezzo->isNotEmpty()): ?>
                                <p class="side_info_element" >Prezzo: <?= $prezzo ?> euro</p>
                            <?php endif; ?>
                            <?php if($durata->isNotEmpty()): ?>
                                <p class="side_info_element" >Durata: <?= $durata ?> ore</p>
                            <?php endif; ?>
                            <?php if($num_min->isNotEmpty()): ?>
                                <p class="side_info_element" >numero minimo di partecipanti: <?= $num_min ?></p>
                            <?php endif; ?>
                            <?php if($num_max->isNotEmpty()): ?>
                                <p class="side_info_element" >numero massimo di partecipanti: <?= $num_max ?></p>
                            <?php endif; ?>
                            <?php if($deadline->isNotEmpty()): ?>
                                <p class="side_info_element" >deadline: <?= $deadline ?></p>
                            <?php endif; ?>
                            <?php if($soggetto->isNotEmpty()): ?>
                                <p class="side_info_element" >Organizzato da:<br><strong><?= $soggetto ?></strong></p>
                            <?php endif; ?>
                                <p class="side_info_element" ><?= date('d/m/Y', $nextdate) ?></p>
                                <a class="more_events contattaci" href="<?= $link ?>">→ contattaci</a><br>
                            <?php if($page->formid()->isNotEmpty()): ?>
                            <br>
                             <a class="more_events iscriviti" href="<?= $page->formid() ?>">→ iscriviti</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php snippet('footer'); ?>