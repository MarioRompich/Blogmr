<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<!-- 	<link rel="stylesheet" type="text/css" href="bootstrap/mdb.min.css">
 -->
	<script type="text/javascript" src="bootstrap/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js" ></script>
	<!-- <script type="text/javascript" src="bootstrap/mdb.min.js" ></script> -->
</head>
<body>
<div class="container-fluid">
	<div class="container itm-top">
		<?php $posts = getPosts($db);?>
		<!-- <h1 class="text-center pt-1 pb-2"><strong>The newest post</strong></h1> -->
		<div class="row">
			<?php foreach ($posts as $post): ?>
				<?php if ($post['estado'] == 1) {?>
					<div class="col-sm-4 pt-4">
						<div class="card">
						  	<div class="card-body">
						    	<img class="img-fluid" src="photos/<?php echo $post['thumb']?>">
						    	<h4 class="card-title text-rimary"><strong><?php echo $post['title']; ?></strong></h4><hr>
						    	<p class="card-text"><?php echo $post['abstract'];?></p>
						    	<div class="row">
						    		<div class="col-9"><p><strong>publicado: </strong><?php echo fecha($post['creatAt']);?></p></div>
						    		<div class="col text-right"><a href="showPost.backend.php?id=<?php echo $post['id']?>" class="see"><p class="card-title"><strong>ver mas</strong></p></a></div>
						  		</div>
						  	</div>
						</div>
					</div>
				<?php } ?>
			<?php endforeach ?>
		</div><br>	
	</div>
</div>
</body>
</html>