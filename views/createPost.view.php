<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container-fluid"><br>
		<div class="container itm-top">
			<div class="row justify-content-md-center">
				<div class="col-sm-6 col bg-white pl-5 pr-5"><br>
				 	<h1 class="text-center">New post</h1><hr>
					<form action="createPost.backend.php" method="POST" id="newPost">
			       		<div class="form-group">
			       			<label>Title</label>
			       			<input type="text" name="title" required  class="form-control">
			       		</div>
			       		<div class="form-group">
			       			<label>Image</label><br>
			       			<input type="file" name="photo">
			       		</div>
			       		<div class="form-group">
			       			<label>Abstract</label>
			       			<input type="text" name="abstract"  class="form-control">
			       		</div>
			       		<div class="form-group">
			       			<label>Content</label>
			       			<textarea cols="20" type="text" name="content" class="form-control"></textarea>
			       		</div>
			       		<div class="form-group">
			       			<label>Active</label><br>
			       			<input type="checkbox" name="status">
			       		</div>
			       		<div class="form-group">
			       			<div onclick="create()" class="btn btn-danger btn-block">Add</div>
			       		</div>
			       </form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function create(){
		var newPost = new FormData($('#newPost')[0]);
		$.ajax({
			url:'createPost.backend.php',
			type:'POST',
			data:newPost,
			processData: false,
			contentType: false,
			success: function(data){
				window.location.href = "administrator.backend.php";
			}
		});
		
	}

</script>
</html>