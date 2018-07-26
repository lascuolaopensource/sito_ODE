<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->text()->html();
    $azioni = $page->children()->visible();
    
    ?>
    <div class="flex_sidebar_layout">
        <?php
        snippet('sidebar', array('list' => $azioni ) );
        snippet('content_list', array('list' => $azioni ) );
        ?>
    </div>



<?php snippet('footer') ?>
