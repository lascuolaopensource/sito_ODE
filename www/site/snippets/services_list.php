<div class="content_list">
<?php 

    if(true){ ?>
        <div>
            <?php foreach( $list as $item ){
                $titolo = $item->title()->html();
                $descrizione = $item->descrizione()->kirbytext();
                $link = $item->link();
                $image = $item->image();
                $touchpoint = $item->touchpoint()->toStructure();
                ?>
                <div class="content_list_item" id="<?= $titolo ?>_item" >

                    <h1><?= $titolo ?></h1>
                    <p><?= $descrizione ?></p>
                    <p><?= $link ?></p>
                    <p><?= $image ?></p>
                    <p><?= $touchpoint ?></p>
                    
                </div>
            <?php } ?>
        </div>
    <?php }
?>
</div>