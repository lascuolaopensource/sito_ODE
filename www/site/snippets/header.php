<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Mono');
  </style> 
  <?php echo liveCSS('assets/builds/bundle.css') ?>
</head>
<body>

<header class="header container">
<?php
$items = $pages->visible();
if($items->count()):
?>

<div class="menu container show">

<a class="logo" href="<?= $site->url() ?>" title="Home"><img src="/assets/images/logoODE.svg" alt="home"></a>

<div class="btn-responsive-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
</div>

<div id="mainmenu">

    <ul class="menu_list">

      <?php foreach($items as $item): ?>
          <li class="menu_item "><a title="<?php echo $item->title()->html() ?>" class="<?php e($item->isOpen(), 'active ')?>" href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
      <?php endforeach ?>

    </ul>
</div>

<?php endif ?>

</div>

</header>
