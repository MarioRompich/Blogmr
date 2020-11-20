<?php
session_start();

if (isset($_SESSION['sessionStart'])) {
	header('Location: administrator.backend.php');
}else{
	header('Location: login.backend.php');
}


?>