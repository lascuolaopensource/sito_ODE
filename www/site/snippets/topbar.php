<div class="topbar">
<?php 

    if(true){ ?>
        <ul>
            <?php foreach( $list as $item ){ ?>
                <li><a href="#<?= $item->title() ?>_item"><?= $item->title()->html() ?></a></li>
            <?php } ?>
        </ul>
    <?php }
?>
</div>