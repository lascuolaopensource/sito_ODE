<?php

return function($site, $pages, $page, $args) {

    $spazio   = get('s');
    $contatti   = get('c');

	return array(
        'contatti'   => (int)$contatti,
        'spazio_slug'=> $spazio
	);

};