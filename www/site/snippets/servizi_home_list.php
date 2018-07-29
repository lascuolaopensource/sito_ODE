<div class="content_list">
    <?php foreach( $list as $item ){
        $url = $item->url();
        $titolo = $item->title()->html();
        $descrizione = $item->descrizione()->kirbytext();
        $link = $item->link()->url();
        $image = $item->image()->url();
        $touchpoint = $item->touchpoint()->toStructure();
        ?>
        <a href="<?= $url ?>" class="content_list_item" >
            <div class="head">
                <img class="servizio_icona"src="<?= $image ?>" alt="">
                <h1><?= $titolo ?></h1>
            </div>
        </a>
    <?php } ?>
</div>