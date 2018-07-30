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
<?php snippet('footer-texture-cinque'); ?>    
</div>

<section class="container cowo">
    <h1 class="testata">
        la rete
    </h1>
</section>
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

<?php snippet('footer');
}
?>