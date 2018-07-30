<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <script type="application/ld+json">
  {
     "@type" : "Organization",
      "legalName" : "<?php echo $site->title()->text() ?>",
      "alternateName" : "<?php echo $site->title()->text() ?>",
      "url" : "<?php echo $site->url() ?>",
      "description" : "<?php echo $site->description()->text() ?>",
       "@type" : "ContactPoint", 
        "streetAddress" : "Via Crispi 5",
        "addressLocality" : "Bari",
        "addressRegion" : "Puglia",
        "addressCountry" : "Italy",
        "PostalCode" : "70123",
        "telephone" : "0809148590",
        "contactType" : "administration",
        "logo" : "<?= $site->url() ?>/assets/images/logoode.svg" 
  }
  </script>

  <?php if ($page->parent()->title() == "Eventi"): ?>
      <meta name="description" content="<?= excerpt($page->testo()->text(), 200) ?>">
  <?php else: ?>
      <meta name="description" content="<?= $site->description()->text() ?>">
  <?php endif ?>


  <?php if (!$page->title() == "Home"): ?>
      <meta property="og:title"  content="<?php echo $page->title() ?>" />
      <meta property="twitter:title"  content="<?php echo $page->title() ?>" />
      <meta property="og:url"  content="<?php echo $page->url() ?>" />
      <meta property="twitter:url"  content="<?php echo $page->url() ?>" />
      <?php if($page->parent()->title() == "Eventi"): ?>
      <meta property="og:description"  content="<?php echo $page->testo() ?>" />
      <meta property="twitter:description"  content="<?php echo $page->description() ?>" />
      <meta property="og:url"  content="<?php echo $page->url() ?>" />
      <meta property="twitter:url"  content="<?php echo $page->url() ?>" />
      <?php else: ?>
      <meta property="og:description"  content="<?php echo $page->description() ?>" />
      <meta property="twitter:description"  content="<?php echo $page->description() ?>" />
      <meta property="og:url"  content="<?php echo $page->url() ?>" />
      <meta property="twitter:url"  content="<?php echo $page->url() ?>" />
      <?php endif; ?>
  <?php else: ?>
      <meta property="og:title"  content="<?php echo $site->title() ?>" />
      <meta property="twitter:title"  content="<?php echo $site->title() ?>" />
      <meta property="og:description"  content="<?php echo $site->description() ?>" />
      <meta property="twitter:description"  content="<?php echo $site->description() ?>" />

      <meta property="og:url"  content="<?php echo $site->url() ?>" />
      <meta property="twitter:url"  content="<?php echo $site->url() ?>" />
  
  <?php endif; ?>


  <?php if (!$page->images()->isEmpty()): ?>

  <?php foreach($page->images() as $image): ?>
      <meta property="og:image" content="<?php echo $image->url() ?>" />
  <?php endforeach ?>

  <?php endif; ?>

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

<a class="logo" href="<?= $site->url() ?>" title="Home"><img src="/assets/images/logoode.svg" alt="home"></a>

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
