<?php snippet('header') ?>

<header>
    <div class="cover">
        <div class="container">
            <h1 class="titolo"><?php echo $site->title()->html() ?></h1>
            <p class="paragrafo"><?= $page->text()->html() ?></p>
        </div>
    </div>
</header>


<?php
    $eventi = page('eventi')->children()->visible()->limit(4);
?>
    <section>
        <div class="container flex_column_layout">
                <h1>Scopri gli eventi</h1>
                <?php
                snippet('filterbar', array('list' => $eventi ) );
                snippet('events_list', array('list' => $eventi ) );
                ?>
                <a href="/eventi">vedi tutti</a>
                <a href="/eventi">proponi un evento</a>
        </div>
    </section>
    <section>
        <div class="container flex_column_layout">
         <?php $servizi = page('servizi')->children()->visible()->limit(4); ?>
            <h1>Servizi</h3>

            <?php snippet('servizi_home_list', array('list' => $servizi ) ); ?>
            
            <a href="/servizi"> Vedi Tutti </a> 

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
