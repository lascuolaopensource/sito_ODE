<?php

return function($site, $pages, $page) {

  	$query = get('q');

	$results = $site->search($query, 'titolo|title|testo|text|descrizione|autore');
	  
	  return array( 
	    'query'      => $query,
	    'results'    => $results,
	    'pagination' => $results->pagination()
	  );

};
