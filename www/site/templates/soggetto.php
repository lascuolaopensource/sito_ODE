<?php snippet('header') ?>

<?php
    $titolo = $page->title()->html();
    $chisei = $page->chisei()->html();
    $galleria = $page->galleria()->toStructure();
    $video = $page->video();
    $link = $page->link();
    $cosafai = $page->cosafai();
    $value = $page->value();
    $tags = $page->tags();
?>

<?php snippet('footer') ?>
