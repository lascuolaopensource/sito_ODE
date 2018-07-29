<?php snippet('header') ?>


<?php
   $titolo = $page->title()->html();
   $descrizione = $page->text()->html();
   $relazioni = $page->children()->visible();
?>
<div class="flex_column_layout container">
       <?php
       snippet('topbar', array('list' => $relazioni ) );
       snippet('relations_list', array('list' => $relazioni ) );
       ?>
   </div>




<?php snippet('footer') ?>