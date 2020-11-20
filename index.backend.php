<?php
// echo $_SERVER['REQUEST_URI'];
	function fecha($creatAt){
		$timestamp = strtotime($creatAt);
		$day 	= date('d', $timestamp);
		$month 	= date('m', $timestamp);
		$year	= date('Y', $timestamp);

		$months = ['Jenuary', 'Febrary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Octuber', 'November', 'December'];
		$month = $month -1;
		$month = $months[$month];
		$date = $day . ' de ' . $month . ' del ' . $year;

		return $date;
	}

	require 'views/header.view.php';
	require 'DBConection.php';
	require 'views/index.view.php';
	require 'views/footer.view.php';
?>