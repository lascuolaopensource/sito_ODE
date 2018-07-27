<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $spazi = $page->children()->visible();
?>

    <div class="flex_sidebar_layout">
        <?php
        snippet('sidebar', array('list' => $spazi ) );
        snippet('spaces_list', array('list' => $spazi ) );
        ?>
    </div>

<?php snippet('footer') ?>
