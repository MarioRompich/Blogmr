<?php

session_start();

if (isset($_SESSION['sessionStart'])) {
	require 'views/header.view.php';
	require 'DBConection.php';
	require 'views/createPost.view.php';
}else{
	header('Location: issetSession.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$title = $_POST['title'];
	$abstract = $_POST['abstract'];
	$content =$_POST['content'];
	$postBy = $_SESSION['sessionStart'];
	$status = isset($_POST['status']) ? 1 : 0;

	$thumb = isset($_FILES['photo'] ) ? $_FILES['photo']['name'] : 'default.jpg';
	// $imgName = basename($thumb, ".jpg");
	$ext = pathinfo($thumb, PATHINFO_EXTENSION);
	$thumb = date('YmdHis') . '.' . $ext;

	$isIgm = isset($thumb)  ?  getimagesize($_FILES['photo']['tmp_name']) : false;

	echo $status;
	if ($isIgm !== false) {
		$folder = 'photos/';
		$pathSave = $folder . $thumb;

		echo $pathSave;
		$save = move_uploaded_file($_FILES['photo']['tmp_name'], $pathSave);
	}

	insertPost($postBy, $title, $abstract, $content, $status, $thumb,  $db);

}




?>