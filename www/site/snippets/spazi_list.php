<div class="content_list">
<?php 

    if(true){ ?>
        <div>
            <?php foreach( $list as $item ){
                $titolo = $item->title();
                $descrizione = $item->descrizione()->kirbytext();
                $galleria = $item->galleria()->toStructure();
                $tariffario = $item->tariffario()->kirbytext();
                $dotazione = $item->dotazione()->kirbytext();
                $coworking = $item->coworking()->kirbytext();
                ?>
                <div class="content_list_item" id="<?= $titolo ?>_item" >

                    <h1><?= $item->title()->html(); ?></h1>
                    <p><?= $descrizione ?></p>
                    <p><?= $tariffario ?></p>
                    <p><?= $dotazione ?></p>
                    <p><?= $coworking ?></p>
                    
                </div>
            <?php } ?>
        </div>
    <?php }
?>
</div>