<?php snippet('header') ?>

    <section>
        <div class="margini container flex_column_layout">
            <h2 class="first">
            <?= $page->testo_1()->kirbytext() ?>
            </h2>
            <p class="second">
            <?= $page->testo_2()->text() ?>
            </p>
        </div>
    </section>


<?php
    $eventi = page('eventi')->children()->visible()->limit(4);
?>
    <section>
        <div class="container flex_column_layout">
                <br><br>
                <h1>Eventi</h1>
                <?php
                snippet('filterbar', array('list' => $eventi ) );
                snippet('events_list', array('list' => $eventi ) );
                ?>
                <a class="more_events" href="/eventi" title="vedi tutti">vedi tutti</a>
        </div>
    </section>

    <section>
        <div class="margini container flex_column_layout calltoaction">

            <h1>Call to action</h1>
            <div class="flexbox">
            <?php foreach ($page->interazioni()->toStructure() as $item):?>
                <a class="calltoaction" href="<?= $item->url() ?>" title="<?= $item->titolo() ?>" target="_blank"><?= $item->titolo() ?></a>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container flex_column_layout negativo">
            <h1>Scopri Officina</h1>
            <h2 class="extreme-container">
            <a class="extreme" title="servizi" href="/servizi">→ servizi</a>
            <br>
            <a class="extreme" title="spazi" href="/spazi">→ spazi</a> 
            </h2>
        </div>
    </section>
    <section>
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
    <div class="container flex_column_layout">
        <h1>L'ultima notizia</h1><br>
        
        <div class="post-home">
        
            <a class="none" href="<?= page('blog')->children()->visible()->last()->url() ?>">
            <div class="sx">
                <?= page('blog')->children()->visible()->last()->cover()->toFile(); ?>
            </div>

            <div class="dx">
                <h2 class="titolino"><?= page('blog')->children()->visible()->last()->title() ?></h2>

                <p class="descrizione">
                <?= excerpt(page('blog')->children()->visible()->last()->testo()->kirbytext(), 140) ?>
                </p>

                <h5 class="autore"><?= page('blog')->children()->visible()->last()->autore() ?>
                </h5>
                <?php foreach(page('blog')->children()->visible()->last()->tags() as $tag): ?>
                <?php endforeach; ?>
            </div>
            </a>
        </div>

        <a class="more_events" href="/blog" title="vedi tutti">altre notizie</a>

    </div>
    </section>



</div> <!-- .container -->
<?php snippet('footer') ?>
