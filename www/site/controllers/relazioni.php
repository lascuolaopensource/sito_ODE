<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $query   = get('q');
	if(isset($query)):  
		if($query == "all"):
		$results = $page->children();
		else:
		$results = $page->children()->search($query,'title|cap|location');
		endif;
	else:
		$results = $page->children();
	endif;

//	  $results = $results->paginate(6);

	return array(
		'query'      => $query,
		'results'    => $results,
		'pagination' => $results->pagination()
	);

};