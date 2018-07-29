<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $spazi = $page->children()->visible();
?>

<section>
    <div class="container flex_column_layout">
        <h1><?= $titolo ?></h1>
        <p><?= $descrizione ?></p>
    </div>
</section>
<section>
    <div class="container">
        <?php snippet('spazi_list',array('list'=>$spazi)); ?>
    </div>
</section>

<?php snippet('footer') ?>
