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
                

              <?php $remaining = $nextdate - time(); 
              $day = floor($remaining / 86400);
              $hr  = floor(($remaining % 86400) / 3600);
              $min = floor(($remaining % 3600) / 60);
              $sec = ($remaining % 60); ?>

                <?php if($day >= -1): ?>


                <a href="<?= $evento->url() ?>" class="event_item" id="<?= $titolo ?>_item" style="background-image:url('<?= $site->url() ?>/content/<?= $evento->diruri() ?>/<?= $evento->cover()->path() ?>')" >
                    <div class="info">
                        <div class="category"><?= $categoria ?></div>
                        <h1 class="titolo_evento"><?= $titolo ?>
                        </h1>
                        <p>→ spazio <?= $luogo ?></p>
                        <h2 class="data"> <?= date('d/m', $nextdate) ?></h2>
                        <?php if($prezzo->isNotEmpty()): ?>
                        <p class="price"><?= $prezzo ?> euro</p>
                        <?php else: ?>
                        <p class="price">gratuito</p>
                        <?php endif;?>
                    </div>
                    <div class="layer"></div>
                </a>
            <?php endif;?>
            <?php } ?>
</div>
<?php if($page == "eventi"): ?>
<?php $counter = 0; ?>
<?php foreach( $list as $evento ): ?>
  <?php $remaining = $nextdate - time(); 
  $day = floor($remaining / 86400);
  $hr  = floor(($remaining % 86400) / 3600);
  $min = floor(($remaining % 3600) / 60);
  $sec = ($remaining % 60); ?>

    <?php if($day < -1): ?>
        <?php $counter++ ?>
    <?php endif; ?>

<?php endforeach; ?>

<?php if($counter > 0): ?>
<section class="container cowo">
   <h1 class="testata archivio">
        archivio
    </h1>
</section>

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
              <?php $remaining = $nextdate - time(); 
              $day = floor($remaining / 86400);
              $hr  = floor(($remaining % 86400) / 3600);
              $min = floor(($remaining % 3600) / 60);
              $sec = ($remaining % 60); ?>

                <?php if($day < -1): ?>

                <a href="<?= $evento->url() ?>" class="event_item" id="<?= $titolo ?>_item" style="background-image:url('<?= $site->url() ?>/content/<?= $evento->diruri() ?>/<?= $evento->cover()->path() ?>')" >
                    <div class="info">
                        <div class="category"><?= $categoria ?></div>
                        <h1 class="titolo_evento"><?= $titolo ?>
                        </h1>
                        <p>→ spazio <?= $luogo ?></p>
                        <h2 class="data"> <?= date('d/m', $nextdate) ?></h2>
                        <?php if($prezzo->isNotEmpty()): ?>
                        <p class="price"><?= $prezzo ?> euro</p>
                        <?php else: ?>
                        <p class="price">gratuito</p>
                        <?php endif;?>
                    </div>
                    <div class="layer"></div>
                </a>

                <?php endif;?>
            <?php } ?>
</div>
<?php endif; ?>
<?php endif; ?>