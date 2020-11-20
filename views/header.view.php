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
<div class="container-fluid bg-danger">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>M+Rompich <a href="index.backend.php"><i class="fa fa-home" aria-hidden="true"></i></a></h1>
			</div>
			<?php $url = $_SERVER['REQUEST_URI']; if ($url == '/php/Blog/index.backend.php') { ?>
				<div class="col" style="padding: 10px 0px">
					<div class="row">
						<div class="col">
							<input class="form-control">
						</div>
						<div class="col-sm-4">
							<h2>
								<a href="https://www.facebook.com/mario.rompich.7" target="blanck"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
								<a href="https://www.instagram.com/m_rompich/" target="blanck"><i class="fa fa-instagram" aria-hidden="true"></i></a>
								<a href="logIn.backend.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</h2>
						</div>
						
					</div>
				</div>
			<?php }else{ ?>
				<div class="col" style="padding: 10px 0px">
					<h2 class="text-right">
						
						<a href="logIn.backend.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
						<?php if (isset($_SESSION['sessionStart'])) {?>
							<span class="text-white"><?php echo $_SESSION['sessionStart'];?></span>
							<a href="closeSession.php" class="text-white" title="Log out"><i class="fa fa-sign-out text-primary" aria-hidden="true"></i></a>
						<?php }?>
						
					</h2>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- <div class="bg-primary">
	
</div> -->
</body>
</html>