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

    <section>
        <div class="margini container flex_column_layout calltoaction">

            <h1>Call to action</h1>
            <div class="flexbox">
            <?php foreach (page('home')->interazioni()->toStructure() as $item):?>
                <a class="calltoaction" href="<?= $item->url() ?>" title="<?= $item->titolo() ?>" target="_blank"><img src="<?= $site->url(); ?>/assets/images/<?= $item->icona()->id();?>"><br><?= $item->titolo() ?></a>
            <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section>
        <div class="container flex_column_layout coworking">
           <div class="box">
               <img src="/assets/images/1_color.png">
               <div class="message">
                <h1>Coworking</h1>
                <?php 
                    $cw_desc = page('coworking')->descrizione()->html();
                    ?>
                <p><?= excerpt($cw_desc->kirbytext(), 140) ?></p>
                <a class="more_events coworking" href="/coworking" title="coworking">maggiori informazioni</a>
                </div>
           </div>
        </div>
    </section>
    <?php snippet('footer') ?>
