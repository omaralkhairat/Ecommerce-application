<?php

class Amjad {

	public function say() {
		echo " AMJADDD Kerrehhhh";
	}
}

require_once('inc/config.php');

function __autoload($class_name) {
	$class = explode("_", $class_name);
	$path = "classes/".implode("/", $class).".php";
	require_once($path);
}


$core = new Core();
$core->run();