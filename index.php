<?php

require 'config.php'; //paneb käima/võtab kasutusele config-i
require 'classes/Request.php';
require 'classes/user.php';
require 'classes/database.php';

//Check that user requested file actually exists
if (file_exists('controllers/'.$request->controller.'.php')){
	//Try to require the file which includes the class (bluebrint) of the specified controller object
	require 'controllers/'.$request->controller.'.php';
	//Load the controller
	$controller = new $request->controller;
	//check if this controller demands login
		if (isset($controller->requires_auth)){
			//Ask for username and password
			$_user->require_auth();
		}
	//Execute the action
		$controller->{$request->action}(); // sulud sest action on index() auth.php-s
} else {
	//inform user that the page does not exists
	echo "The page '{$request->controller}' does not exist";
}
