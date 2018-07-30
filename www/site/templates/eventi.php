<?php snippet('header') ?>

<?php $eventi = page('eventi')->children()->visible()->sortBy('nextdate')->flip(); ?>
<?php if($tag = param('tag')): ?>
<?php $eventi = $eventi->filterBy('categoria', $tag); ?>
<?php endif ?>

<div class="container">
<?php snippet('footer-texture-due'); ?>    
</div>

<section class="container cowo">
   <h1 class="testata">
        <?= $page->title() ?>
    </h1>
</section>

<div class="flex_column_layout container eventi">

 

        <?php
                snippet('filterbar', array('list' => $eventi) );

                snippet('events_list', array('list' => $eventi) );
        ?>
</div>

</div> <!-- .container -->
<?php snippet('footer') ?>
