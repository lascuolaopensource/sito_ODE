<?php
if(isset($query) && isset($results)){

    header('Content-type: application/json; charset=utf-8');

    // $data = $pages->find('blog')->children()->visible()->flip()->paginate(6);

    $json = array();
    $i = 0;

    foreach($results as $key=>$item) {

    $json[] = array(
        'id'            => (string)$i,
        'nome'   		=> (string)$item->title(),
        'indirizzo'   	=> (string)$item->location()->yaml()['address'],
        'cap'   		=> (string)$item->cap(),
        'location'   	=> $item->location()->yaml(),
        'lat'           => (string)$item->location()->yaml()['lat'],
        'lng'           => (string)$item->location()->yaml()['lng'],
        'tel'   		=> (string)$item->tel(),
        'email'   		=> (string)$item->email(),
        'apertura' 		=> (string)$item->apertura(),
        'note'          => (string)$item->note()
    );

    $i++;

    }
    echo json_encode($json);

}else{

snippet('header') ?>

<?php
   $titolo = $page->title()->html();
   $descrizione = $page->text()->html();
   $relazioni = $page->children()->visible();
?>

<div class="container">

    <div class="map_container">
        <div id="sidebar_dovesiamo">

            <div class="input">
                <input id="input_search_dovesiamo" type="text" placeholder="Cerca">
            </div>

            <div id="risultati_dovesiamo">
            </div>

        </div>

        <div id="map_dovesiamo"></div>
    </div>

</div>



<?php snippet('footer');
}
?>