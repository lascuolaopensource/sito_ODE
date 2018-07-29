<?php snippet('header') ?>


<?php $eventi = page('calendario')->children()->visible(); ?>


<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>

<div class="flex_column_layout container">

	<h1 class="testata">
		<?= $page->title() ?>
	</h2>

        <?php
        snippet('filterbar', array('list' => $eventi ) );
        ?>

       <?php if($eventi->isNotEmpty()): ?>
			<div class="events_list">
			​
			      <?php foreach( $eventi as $evento ){
			        $titolo = $evento->title()->html();
			        $luogo = $evento->luogo()->yaml();
			        $soggetto = $evento->soggetto()->html();
			        $categoria = $evento->categoria();
			        $cover = $evento->cover()->html();
			        $tags = $evento->tags()->html();
			        $prezzo = $evento->prezzo()->html();
			        $link = $evento->link()->url();
			        $nextdate = strtotime($evento->nextdate());
			        $audience = $evento->audience()->yaml();
			        //$image = $evento->image()->toFile();
			        ?>
			        <a href="" class="event_item" id="<?= $titolo ?>_item" style="background-image:url('')">
			          <div class="info">
			            <div class="category"><?= $categoria ?></div>
			            <h1 class="titolo_evento"><?= $titolo ?>
			            </h1>
			            <p> <?= date('d/m/Y', $nextdate) ?> → spazio <?= $luogo[0] ?></p>
			            <?php if($prezzo->isNotEmpty()): ?>
			            <p class="price"><?= $prezzo ?> euro</p>
			            <?php else: ?>
			            <p class="price">gratuito</p>
			            <?php endif;?>
			          </div>
			        </a>
			      <?php } ?>
			</div>
			<?php else: ?>
			<h2 class="message nope">
			  Al momento non ci sono contenuti di questo tipo.
			</h2>
			<?php endif; ?>


</div>

</div> <!-- .container -->
<?php snippet('footer') ?>
