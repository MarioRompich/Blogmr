<?php 
session_start();
if (isset($_SESSION['sessionStart'])) {
		require 'DBConection.php';
		require 'views/header.view.php';
		require 'views/administrator.view.php';
		require 'views/footer.view.php';
}else{
	header('Location: login.backend.php');

}
