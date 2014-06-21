<?php

require_once('../inc/config.php');

function __autoload($class_name) {
	$class = explode("_", $class_name);
	$path = "../classes/".implode("/", $class).".php";
	require_once($path);
}

$objBasket = new Basket();

$out = array();
$out['bl_ti'] = $objBasket->_number_of_items;
$out['bl_st'] = number_format($objBasket->_sub_total, 2);
$out['bl_vat'] = number_format($objBasket->_vat, 2);
$out['bl_total'] = number_format($objBasket->_total, 2);
echo json_encode($out);