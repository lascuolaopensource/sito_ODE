<div class="content_list">
<?php 

    if(true){ ?>
        <div>
            <?php foreach( $list as $item ){
                $titolo = $item->title()->html();
                $descrizione = $item->descrizione()->kirbytext();
                $link = $item->link()->url();
                //$image = $item->image()->toFile();
                $touchpoint = $item->touchpoint()->toStructure();
                ?>
                <div class="content_list_item" id="<?= $titolo ?>_item" >
                    <div class="head">
                        <h1><?= $titolo ?></h1>
                        <a href="<?= $link ?>">Vai al sito</a>
                    </div>
                    <p><?= $descrizione ?></p>
                    <p>contatti:</p>
                    <?php foreach ($touchpoint as $touch): ?>
                        <p><?= $touch->nome()->html() . ' ' . $touch->ruolo()->html() . ' ' . $touch->email()->html() ?></p>
                    <?php endforeach;?>
                    
                </div>
            <?php } ?>
        </div>
    <?php }
?>
</div>