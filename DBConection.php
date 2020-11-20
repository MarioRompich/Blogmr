<?php
function conection(){

	try {
		$db = new PDO('mysql:host=localhost;dbname=blog', 'mrompich', 'mrompich'); 
		return $db;
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
}

$db = conection();


function getUser($username, $password, $d){
	$user = $d->prepare('select * from users where email= :email and clave = :clave');
	$user->execute([':email' => $username, ':clave' => $password]);
	$user = $user->fetch();
	
	return $user;
}

function getPosts($db){
	$id = 'creatAt';

	$posts = $db->prepare("select * from posts ORDER BY :id ASC");
	$posts->execute([':id' => $id]);
	$posts = $posts->fetchAll();

	return $posts;
}

function showPost($id, $db){
	$show = $db->prepare("select * from posts where id = :id ");
	$show->execute([':id' => $id]);
	$show = $show->fetch();

	return $show;
}

function insertPost($postBy, $title, $abstract, $content, $status, $thumb, $db){
	$statement = $db->prepare("insert into posts values(null, '$postBy', '$title', '$abstract', '$content', '$thumb',  $status, null, null)");
	$statement->execute();
}

function newUser($member, $db, $errors){
	// print_r($member);

		$email 			= $member['email'];	
		$username		= $member['username'];
		$clave 			= $member['password'];
		$retypeClave 	= $member['passwordr'];

		if (empty($errors)) {
			$statement = $db->prepare(
				"insert into users values(null, '$email','$username','$clave', '$retypeClave', null, null)"
			);
			$statement->execute();
		}

		header('Location: LogIn.backend.php');
}

function deletePost($deleteId, $db){
	$delete = $db->prepare("delete from posts where id = :deleteId ");
 	$delete->execute([':deleteId' => $deleteId]);
}	

?>	