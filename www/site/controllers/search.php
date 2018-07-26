<?php

return function($site, $pages, $page) {

  	$query = get('q');

	$results = $site->search($query, 'titolo|title|testo|text|descrizione|autore');
	  
//	  $results = $results->paginate(6);

	  return array( 
	    'query'      => $query,
	    'results'    => $results,
	    'pagination' => $results->pagination()
	  );

};
