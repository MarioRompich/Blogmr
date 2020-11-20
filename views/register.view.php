<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container itm-top">
			<div class="row justify-content-center align-items-center minh-100 ">
				<div class="col-sm-6 mt-4 pb-5" >
					<div class="card">
					  	<div class="card-body">
					  		<h1 class="font-weight-bold	  text-center">Sign in</h1><hr>
					     	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="sigIn">
					     		<div class="form-group">
						            <label for="recipient-name" class="col-form-label">Email</label>
						            <input type="text" class="form-control" name="email" placeholder="Email">
						        </div>
						        <div class="form-group">
						            <label for="recipient-name" class="col-form-label">Usermame</label>
						            <input type="text" class="form-control" name="username" placeholder="Username">
						        </div>
						        <div class="form-group">
						            <label for="recipient-name" class="col-form-label">Password</label>
						            <input type="password" class="form-control" name="password" placeholder="Password">
						        </div>
					      	 	<div class="form-group">
					            	<label for="recipient-name" class="col-form-label">Retype you password</label>
					            	<input type="password" class="form-control" name="passwordr" placeholder="Retype you password">
					        	</div>
					        	<div class="form-group">
					            	<button onclick="sigIn.submit()" class="btn btn-danger btn-block">Sig in</button>
					        	</div>
				        	</form>
				        	<?php if (!empty($errors)) {?>
				        		<div class="text-danger">
					        		<ul >
					        			<?php echo $errors;?>
					        		</ul>
					        	</div>
				        	<?php } ?>
				        	<hr>
				        	<div class="text-center">
					    		<a href="login.backend.php" class="text-primary">Log in</a>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>