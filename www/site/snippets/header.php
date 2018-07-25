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
