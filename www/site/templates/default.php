<?php snippet('header') ?>

<header class="header">
<?php
$items = $pages->visible();
if($items->count()):
    ?>
<div class="menu container">
    <ul class="menu_list">
            <?php foreach($items as $item): ?>
                <li class="menu_item"><a title="<?php echo $item->title()->html() ?>" class="<?php e($item->isOpen(), 'active ')?>" href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
            <?php endforeach ?>
    </ul>
</div>
<?php endif ?>
</header>
<div class="container">
<h1 class="titolo"><?php echo $page->title()->html() ?></h1>
<p class="paragrafo"><?= $page->text()->html() ?></p>

<?php $calendar = calendar(page('eventi')->calendar()->yaml()); ?>

<?php
	snippet('calendar-table', array(
        'calendar'	=> $calendar,
		'fields'		=> array(
            'summary'		=> l::get('title'),
			'description'	=> l::get('description')
            )
        ));
        ?>

</div> <!-- .container -->
<?php snippet('footer') ?>
