<div class="content_list">
<?php 

    if(true){ ?>
        <div>
            <?php foreach( $list as $item ){
                $titolo = $item->titolo()->html();
                $descrizione = $item->descrizione()->html();
                $galleria = $item->galleria()->toStructure();
                $prenotazione = $item->prenotazione();
                $mail = $item->mail(); 
                ?>
                <div class="content_list_item" id="<?= $titolo ?>_item" >

                    <h1><?= $titolo ?></h1>
                    <p><?= $descrizione ?></p>
                    
                </div>
            <?php } ?>
        </div>
    <?php }
?>
</div>