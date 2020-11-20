<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container itm-top">
			<div class="row justify-content-md-center pb-5 mb-5">
				<div class="col-sm-5 align-self-center pb-5 mb-5" style="margin-top:100px">
					<div class="card">
					  	<div class="card-body">					    	
					    	<h2 class="card-title text-center"><strong>Log In</strong></h2>
					    	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="user">
					    		<div class="form-group">
					    			<input type="text" name="username" class="form-control" placeholder="Email">
					    		</div>
					    		<div class="form-group">
					    			<input type="password" name="password" class="form-control" placeholder="Password">
					    		</div>
					    		<div class="form-group">
					    			<input onclick="user.submit()" class="btn btn-danger btn-block" value="Log in">
					    		</div>
					    	</form>
					    	<?php if (!empty($errors)) {?>
					    		<ul class="text-danger">
					    			<?php echo $errors; ?>
					    		</ul>
					    	<?php }?>
					    	<div class="text-center">
					    		<a href="register.backend.php" class="text-primary">Register</a>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>