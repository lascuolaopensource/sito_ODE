<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $servizi = $page->children()->visible();
?>
<div class="flex_sidebar_layout">
        <?php
        snippet('sidebar', array('list' => $servizi ) );
        snippet('services_list', array('list' => $servizi ) );
        ?>
    </div>

<?php snippet('footer') ?>