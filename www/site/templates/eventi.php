<?php snippet('header') ?>

<?php
    $eventi = page('eventi')->children()->visible();
?>
<div class="flex_column_layout container">
        
        <?php
        snippet('filterbar', array('list' => $eventi ) );
        snippet('events_list', array('list' => $eventi ) );
        ?>
</div>

</div> <!-- .container -->
<?php snippet('footer') ?>
