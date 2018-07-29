<?php snippet('header') ?>

<div class="container">
<?php //snippet('footer-texture-due'); ?>    
</div>

<div class="flex_column_layout container">

	<h1 class="testata">
	</h2>

        <?php
                //snippet('filterbar', array('list' => page('eventi')->children()->visible()->sortBy('nextdate')->flip()->limit(6) ) );
                snippet('events_list', array('list' => page('eventi')->children() ) );
        ?>
</div>

</div> <!-- .container -->
<?php snippet('footer') ?>
