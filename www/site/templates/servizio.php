<?php snippet('header') ?>
<div class="container">
        <div>
            <?php
                $titolo = $page->title()->html();
                $descrizione = $page->descrizione()->kirbytext();
                $link = $page->link()->url();
                $image = $page->image()->toFile();
                $touchpoint = $page->touchpoint()->toStructure();
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
        </div>
</div>
<?php snippet('footer') ?>