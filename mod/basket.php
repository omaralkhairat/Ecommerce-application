<?php

require_once('../inc/config.php');

function __autoload($class_name) {
	$class = explode("_", $class_name);
	$path = "../classes/".implode("/", $class).".php";
	require_once($path);
}

die("this is in basket.php");

if(isset($_POST['job']) && isset($_POST['id'])) {

	$out = array();

	$job = $_POST['job'];
	$id = $_POST['id'];

	$objCatalogue = new Catalogue();
	$product = $objCatalogue->getProduct($id);

	if(!empty($product)) {

		switch ($job) {
			case 0:
				Session::removeItem($id);
				$out['job'] = 1;
				break;
			
			case 1:
				Session::setItem($id);
				$out['job'] = 0;
				break;
		}

		echo json_encode($out);
	}
}