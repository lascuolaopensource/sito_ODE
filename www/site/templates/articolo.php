<?php snippet('header') ?>


<?php
    $titolo = $page->titolo()->html();
    $data = $page->datetime();
    $cover = $page->image($page->cover())->url();    
    $autore = $page->autore()->html();
    $testo = $page->testo()->html();
    $galleria = $page->galleria()->toStructure();
    $video = $page->video();
    $link = $page->url();
    $tags = $page->tags();
?>
<div class="cover">
    <img class="cover_bg" src="<?= $cover ?>" alt="">
    <div class="container">
        <h1 class="cover_title"><?= $titolo ?></h1>
        <h6 class="cover_subtitle"><?= $autore ?></h6>
        <hr>
        <h6 class="cover_subtitle"><?= $data ?></h6>
        <div class="tagfilters">
            <?php foreach($tags as $tag): ?>
            
            <a href="/blog/tag:<?php echo $tag ?>" class="tag">#<?php echo $tag ?></a>

            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="container">
    <p class="paragrafo"><?= $page->testo() ?></p>
    <div class="related_articles">
    </div>
</div>

<?php snippet('footer') ?>
