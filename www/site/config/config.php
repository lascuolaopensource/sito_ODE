<?php

@include __DIR__ . DS . 'license.php';

c::set('map.key', 'AIzaSyCm8q0HlWOcPQ_iwUEwAPmQPIlqIZK0pBk');

/*
c::set('languages', array(
	array(
		'code'    => 'en',
		'name'    => 'English',
		'locale'  => 'en_US.UTF-8',
		'default' => false,
		'url'     => '/'
    ),
	array(
		'code'    => 'it',
		'name'    => 'Italian',
		'locale'  => 'it_IT.UTF-8',
		'default' => true,
		'url'     => '/'
	)
));
*/

c::set('routes', array(
	array(
	  'pattern' => 'bacheca/(:any)',
	  'action'  => function($slug) {
  
		$page = page('spazi')->children()->find($slug);
  
		//if(!$page) $page = page('blog/' . $uid);
		//if(!$page) $page = site()->errorPage();
  
		return site()->visit($page);
  
	  }
	)
  ));

c::set('cache', false);
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
