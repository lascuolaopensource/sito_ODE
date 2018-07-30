<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $soggetti = $page->children()->visible();
?>


<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>

<section class="container cowo">
    <h1 class="testata">
        <?= $page->title() ?>
    </h1>
</section>

<div class="container padding">
<?php foreach($page->children()->sortBy('title')->flip() as $soggetto): ?>
    <div class="elemento_soggetto spazio">
    <h2 class="nome"><?= $soggetto->title() ?></h2>
        <p class="description">
        <?= $soggetto->descrizione()->text() ?><br>
            <div class="flexbox spazio">
                <?php if($soggetto->dotazione()->isNotEmpty()): ?>
                <p class="mini"><?= $soggetto->dotazione(); ?></p>
                <?php endif; ?>
                <?php if($soggetto->tariffario()->isNotEmpty()): ?>
                <p class="mini"><?= $soggetto->tariffario(); ?></p>
                <?php endif; ?>
                <?php if($soggetto->ora_apertura()->isNotEmpty() && $soggetto->ora_chiusura()->isNotEmpty()): ?>
                <p class="mini"><?= $soggetto->ora_apertura(); ?> — <?= $soggetto->ora_chiusura(); ?></p>
                <?php endif; ?>             
                    <div class="flexbox spazi">
                <?php if($soggetto->mail()->isNotEmpty()): ?>
                        <a class="more_events" href="mailto:<?= $soggetto->mail() ?>">@</a>
                <?php endif; ?>   
                <?php if($soggetto->tel()->isNotEmpty()): ?>
                        <a class="more_events" href="tel:<?= $soggetto->tel() ?>"><img class="svgicon" src="/assets/images/phone.svg" alt=""></a>
                <?php endif; ?>   
                    </div>
            </div>
        </p>
    </div>
<?php endforeach; ?>
</div>    <section>
        <div class="container flex_column_layout coworking">
           <div class="box">
               <img src="/assets/images/1_color.png">
               <div class="message">
                <h1>Coworking</h1>
                <?php 
                    $cw_desc = page('coworking')->descrizione()->html();
                    ?>
                <p><?= excerpt($cw_desc->kirbytext(), 140) ?></p>
                <a class="more_events coworking" href="/coworking" title="coworking">maggiori informazioni</a>
                </div>
           </div>
        </div>
    </section>
    <section>
        <div class="margini container flex_column_layout calltoaction">

            <h1>Call to action</h1>
            <div class="flexbox">
            <?php foreach (page('home')->interazioni()->toStructure() as $item):?>
                <a class="calltoaction" href="<?= $item->url() ?>" title="<?= $item->titolo() ?>" target="_blank"><img src="<?= $site->url(); ?>/assets/images/<?= $item->icona()->id();?>"><br><?= $item->titolo() ?></a>
            <?php endforeach; ?>
            </div>           
        </div>
    </section>

<?php snippet('footer') ?>
