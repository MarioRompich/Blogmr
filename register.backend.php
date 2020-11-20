<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$email 		= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$email 		= filter_var($email, FILTER_VALIDATE_EMAIL);
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$passwordr 	= $_POST['passwordr'];

		$password = str_split($password);

		$errors = '';
		
		if ($email == false || empty($email)) {
			$errors .= "<li>Enter a valid email</li>";
		}

		if (empty($password) || count($password) == 1) {
			$errors .= "<li>Enter a password</li>";
		}

		if (empty($passwordr)) {
			$errors .= "<li>Retype the password</li>";

		}

		if (count($password) <= 4) {
			$errors .= "<li>Your password must have more than 4 character</li>";
		}

		$password = join("", $password);

		$password = hash('sha512', $password);
		$passwordr = hash('sha512', $passwordr);

		if ($password  != $passwordr) {
			$errors .= '<li>Make sure that the passwords are the same</li>';
		}

		$member = [
			'email' 	=> $email,
			'username' 	=> $username, 
			'password' 	=> $password,
			'passwordr' => $passwordr
		];

		require('DBConection.php');

		newUser($member, $db, $errors);
		
	}

include 'views/header.view.php';
include 'views/register.view.php';
include 'views/footer.view.php';
?>