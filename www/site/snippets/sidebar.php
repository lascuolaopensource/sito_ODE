<div class="sidebar">
<?php 

    if(true){ ?>
        <ul>
            <?php foreach( $list as $item ){ ?>
                <li><a href="#<?= $item->titolo() ?>_item"><?= $item->titolo() ?></a></li>
            <?php } ?>
        </ul>
    <?php }
?>
</div>