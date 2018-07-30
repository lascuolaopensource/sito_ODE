<?php snippet('header') ?>


<?php
    $titolo = $page->title()->html();
    $descrizione = $page->descrizione()->html();
    $tariffario = $page->tariffario()->html();
    $dotazione = $page->dotazione()->html();
    $iscrizione = $page->iscrizione()->html();
    $mail = $page->mail();
?>

<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>
<section class="container cowo">
    <h1 class="testata">
        <?= $page->title() ?>
    </h1>
    <p class="description"><?= $descrizione->kirbytext() ?></p>
    <div class="flexbox baretto">
    <?php foreach($page->offerta()->toStructure() as $menu): ?>
    <?php if($menu->visibile()->isNotEmpty()): ?>
    <div class="piatto">
    	<h2 class="nome"><?= $menu->piatto->text()  ?></h2>
    	<p class="ingredienti"><?= $menu->ingredienti->text()  ?></p>
    	<h5 class="prezzo"><?= $menu->prezzo->text()  ?></h5>
    </div>
	<?php endif;?>
	<?php endforeach; ?>

    </div>
</section>

<section class="container cowo bar">
	<br><br>
	Il bar è aperto con i seguenti orari:<br>
	<?= $page->orario() ?><br><br>
	Per maggiori informazioni<br><br>

    <a class="more_events" href="mailto:<?= $mail ?>" title="scrivici">Scrivici</a>
	<br><br>
</section>
<?php snippet('footer') ?>
