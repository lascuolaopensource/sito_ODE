<div class="events_list">
            <?php foreach( $list as $evento ){
                $titolo = $evento->title()->html();
                $luogo = $evento->luogo()->yaml();
                $soggetto = $evento->soggetto()->html();
                $categoria = $evento->categoria();
                $cover = $evento->cover()->html();
                $tags = $evento->tags()->html();
                $prezzo = $evento->prezzo()->html();
                $link = $evento->link()->url();
                $audience = $evento->audience()->yaml();
                //$image = $evento->image()->toFile();
                ?>
                <a href="<?= $evento->url() ?>" class="event_item" id="<?= $titolo ?>_item" style="background-image:url('<?= $evento->image($cover)->url() ?>')">
                    <div class="info">
                        <div class="category"><?= $categoria ?></div>
                        <h1><?= $titolo ?></h1>
                        <p>Organizzato da: <?= $soggetto ?></p>
                        <p>presso: <?= $luogo[0] ?></p>
                        <p class="price">€<?= $prezzo ?></p>
                        <p>a chi è rivolto: <?= $audience[0] ?></p>
                        <div class="tags"><?= $tags ?></div>
                    </div>
                </a>
            <?php } ?>
</div>