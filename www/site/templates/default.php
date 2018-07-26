<?php snippet('header') ?>


<div class="container">
<h1 class="titolo"><?php echo $page->title()->html() ?></h1>
<p class="paragrafo"><?= $page->text()->html() ?></p>

</div> <!-- .container -->
<?php snippet('footer') ?>
