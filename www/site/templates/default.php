<?php snippet('header') ?>

    <section>
        <div class="margini container flex_column_layout">
            <h2 class="first">
            <?= $page->testo_1() ?>
            </h2>
            <p class="second">
            <?= $page->testo_2() ?>
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
        <div class="container flex_column_layout">
            <h2>
            <a class="extreme" title="servizi" href="/servizi">→ servizi</a>
            <br>
            <a class="extreme" title="spazi" href="/spazi">→ spazi</a> 
            </h2>
        </div>
    </section>
    <section>
        <div class="container flex_column_layout">
            <h1>Coworking</h1>
            <?php 
                $cw_desc = page('coworking')->descrizione()->html();
                ?>
            <p><?= $cw_desc ?></p>
        </div>
    </section>
    <section>
        <div class="container flex_column_layout">
            <?php $soggetti = page('soggetti')->children()->visible(); ?>
            <h1>Soggetti</h1>
            <?php
                snippet('soggetti_home_list', array('list' => $soggetti ) );
                ?>
        </div>
    </section>
    <section>
        <div class="container flex_column_layout">
            <h1>Blog</h1>
            <?php
                $posts = page('blog')->children()->visible()->limit(8);
                snippet('post_home_list',array('list'=>$posts));
                ?>
        </div>
    </section>
    <section>
        <div class="container flex_column_layout">
            <h1>Contatti</h1>
        </div>
    </section>
    
    

</div> <!-- .container -->
<?php snippet('footer') ?>
