<?php
return array(
	'_root_'  => 'quiz/index',  // The default route
	'_404_'   => 'quiz/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);