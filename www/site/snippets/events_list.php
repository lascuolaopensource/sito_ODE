<div class="events_list">
            <?php foreach( $list->limit(6) as $evento ){
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
                        <h1 class="titolo_evento"><?= $titolo ?></h1>
                        <p>curato da <?= $soggetto ?> / spazio <?= $luogo[0] ?></p>
                        <?php if($prezzo->isNotEmpty()): ?>
                        <p class="price"><?= $prezzo ?> euro</p>
                        <?php else: ?>
                        <p class="price">gratuito</p>
                        <?php endif;?>
                    </div>
                </a>
            <?php } ?>
</div>