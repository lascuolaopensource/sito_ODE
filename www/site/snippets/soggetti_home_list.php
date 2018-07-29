<div class="sogetti_home_list">
            <?php foreach( $list as $sogg ){
                $titolo = $sogg->title()->html();
                $descrizione = $sogg->descrizione()->html();
                $link = $sogg->url();
                ?>
                <div class="soggetto">
                    <a href="<?= $link ?>"><?= $titolo ?></a>
                    <p><?= $descrizione ?></p>
                </div>
            <?php } ?>
</div>