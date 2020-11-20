<?php

 $id = $_REQUEST['id'];

 require 'DBConection.php';

$postId = showPost($id, $db);

function fecha($creatAt){
	$timestamp 	= strtotime($creatAt);
	$day 		= date('d', $timestamp);
	$month 		= date('m', $timestamp);
	$year 		= date('Y', $timestamp);
	$month = $month -1;

	$months = ['Jenuary', 'Febrary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Octuber', 'November', 'December'];
	$month  = $months[$month];
	$fecha = $day . ' de ' . $month . ' del ' . $year;
	return $fecha;
}

include 'views/header.view.php';
include 'views/showPost.view.php';
require 'views/footer.view.php';

?>