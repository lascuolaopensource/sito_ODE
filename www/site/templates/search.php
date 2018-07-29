<?php
header('Content-type: application/json; charset=utf-8');

// $data = $pages->find('blog')->children()->visible()->flip()->paginate(6);

$json = array();

foreach($results as $article) {

  $json[] = array(
    'url'   => (string)$article->url(),
    'title' => (string)$article->title(),
    'testo'  => (string)$article->testo()->kirbytext()->excerpt(280)
  );

}

echo json_encode($json);

?>