<?php //if($list->isNotEmpty()): ?>
<div class="events_list">

            <?php foreach( $list as $evento ){
                $titolo = $evento->title()->html();
                $luogo = $evento->luogo();
                $soggetto = $evento->soggetto()->html();
                $categoria = $evento->categoria();
                $cover = $evento->cover()->html();
                $tags = $evento->tags()->html();
                $prezzo = $evento->prezzo()->html();
                $link = $evento->link()->url();
                $nextdate = strtotime($evento->nextdate());
                $audience = $evento->audience()->yaml();
                //$image = $evento->image()->toFile();
                ?>

                <a href="<?= $evento->url() ?>" class="event_item" id="<?= $titolo ?>_item" style="background-image:url('<?= $site->url() ?>/content/<?= $evento->diruri() ?>/<?= $evento->cover()->path() ?>')" >
                    <div class="info">
                        <div class="category"><?= $categoria ?></div>
                        <h1 class="titolo_evento"><?= $titolo ?>
                        </h1>
                        <p> <?= date('d/m/Y', $nextdate) ?> → spazio <?= $luogo ?></p>
                        <?php if($prezzo->isNotEmpty()): ?>
                        <p class="price"><?= $prezzo ?> euro</p>
                        <?php else: ?>
                        <p class="price">gratuito</p>
                        <?php endif;?>
                    </div>
                </a>
            <?php } ?>
</div>
