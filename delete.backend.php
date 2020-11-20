<?php 
session_start();

if (isset($_SESSION['sessionStart'])) {
	require 'DBConection.php';

	$deleteId = $_REQUEST['deleteId'];
	deletePost($deleteId, $db);
		
}else{
	header('Location: issetSession.php');
}



 


?>