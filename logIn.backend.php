<?php
session_start();

if (isset($_SESSION['sessionStart'])) {
	header('Location: issetSession.php');
}

require 'DBConection.php';


$d = conection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = '';

	
	$password 	= $_POST['password'];

	$password 	= hash('sha512', $password);
	$username 	= $_POST['username'];

	$user 		= getUser($username, $password, $d);

	if ($user) {
		$_SESSION['sessionStart'] = $user['username'];
		header('Location: issetSession.php');
	}else{
		$errors .= "<li>Check that the user and the password are the rigths</li>"; 
	}

}



// print_r($user['username']);
require 'views/header.view.php';
require 'views/logIn.view.php';
require 'views/footer.view.php';
?>
