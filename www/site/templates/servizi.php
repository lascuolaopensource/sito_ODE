<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $servizi = $page->children()->visible();
?>

<section>
    <div class="container flex_column_layout">
        <h1><?= $titolo ?></h1>
        <p><?= $descrizione ?></p>
    </div>
</section>
<section>
    <div class="container">
        <?php snippet('servizi_list',array('list'=>$servizi)); ?>
    </div>
</section>

<?php snippet('footer') ?>
