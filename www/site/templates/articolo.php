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

<div class="tagfilters">
    <?php foreach($tags as $tag): ?>
    
    <a href="/blog/tag:<?php echo $tag ?>" class="tag">#<?php echo $tag ?></a>

    <?php endforeach; ?>
</div>
<h1 class="titolo"><?php echo $page->title()->html() ?></h1>
<p class="paragrafo"><?= $page->text()->html() ?></p>

<?php snippet('footer') ?>
