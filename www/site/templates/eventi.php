<?php snippet('header') ?>


<?php if($tag = param('tag')): ?>
<?php $eventi = page('eventi')->children()->visible()->filterBy('categoria', $tag); ?>
<?php else: ?>
<?php $eventi = page('eventi')->children()->visible(); ?>
<?php endif ?>


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
