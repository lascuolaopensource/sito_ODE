<?php snippet('header') ?>

        <?php $eventi = page('eventi')->children()->visible(); ?>

<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>

<div class="flex_column_layout container">

	<h1 class="testata">
		<?= $page->title() ?>
	</h2>

        <?php
        snippet('filterbar', array('list' => $eventi ) );
        snippet('events_list', array('list' => $eventi ) );
        ?>
</div>

</div> <!-- .container -->
<?php snippet('footer') ?>
