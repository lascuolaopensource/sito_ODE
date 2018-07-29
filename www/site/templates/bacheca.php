<?php 
    echo liveCSS('assets/builds/bundle.css');
    
    if(!isset($spazio_slug)){
        snippet('bacheca-home');
    }elseif(isset($spazio_slug) && $contatti ){
        snippet('bacheca-spazio-contatti',array('slug'=> $spazio_slug));
    } elseif (isset($spazio_slug)) {
        snippet('bacheca-spazio', array('slug'=> $spazio_slug));
    } 

    echo js('assets/builds/bundle.js');
?>
