<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
	
	<script type="text/javascript" src="/bootstrap/jquery.js"></script>
	<script type="text/javascript" src="/bootstrap/bootstrap.min.js" ></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container-fluid" style="color:white">
	<div class="container itm-top">
		<div class="row">
			<div class="col-sm-10"><h1><strong><i class="fa fa-align-justify" aria-hidden="true"></i> All your posts</strong></h1></div>
			<div class="col-sm-2 pt-3	">
				<a href="createPost.backend.php"><div class="btn btn-success btn-block">
				<i class="fa fa-plus-circle" aria-hidden="true"></i> New post</div></a>
			</div>
		</div><hr>
		<?php $posts = getPosts($db)?>
		<table id="example" class="table table-striped table-bordered" style="width:100%; background: #fff;">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th width="10%">Post by</th>
	                <th width="10%">Title</th>
	                <!-- <th>Abstract</th> -->
	                <th>Content</th>
	                <th width="9%">Thumb</th>
	                <th>Status</th>
	                <th width="13%">Date</th>
	                <th width="10%">Action</th>
	            </tr>
	        </thead>
	        <tbody style="font-size:14px !important">
	        	<?php foreach($posts as $post) { ?>
	            	<tr>
		                <td><?php echo 	$post['id'] ?></td>
		                <td><?php echo 	$post['postBy'] ?></td>
		                 <td><?php echo 	$post['title'] ?></td>
		                <!-- <td><?php echo 	$post['abstract'] ?></td> -->
		                <td class="text-jutify"><?php echo 	 substr($post['content'], 1, 100)?> ...</td>
		                <td class="text-center"><img class="img-fluid text-center" src="photos/<?php echo $post['thumb']?>"></td>
		                <td>
		                	<?php if ($post['estado'] == 1) {?>
		                		<h4 class="text-center text-success"><i class="fa fa-check" aria-hidden="true"></i></h4>
		                	<?php }else{ ?>
		                		<h4 class="text-center text-danger"><i class="fa fa-times" aria-hidden="true"></i></h4>
		                	<?php } ?>
		                </td>
		                <td><?php echo 	$post['creatAt'] ?></td>
		                <td class="d-flx">
		                	<a href="<?php echo "string";?>" title="Edit"><div class="btn edit-icon"><i class="fa fa-pencil" aria-hidden="true"></i></div></a>&nbsp
		                	<div class="btn delete-icon"  data-toggle="modal" data-target="#<?php echo $post['postBy'].$post['id']?>"><i class="fa fa-trash" aria-hidden="true"></i></div> 
		                </td>
		            </tr>
	            <?php }?>
	        </tbody>
    	</table>
	</div><br>
	<?php foreach($posts as $post) { ?>
		<div class="modal fade" id="<?php echo $post['postBy'].$post['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<img class="img-fluid text-center" src="photos/<?php echo $post['thumb']?>">
			        	<h4 style="color:black"><?php echo 	$post['title'] ?></h4><hr>
			        	 <div class="row ">
					       	<div class="col-6">
					        	<a href="delete.backend.php?deleteId=<?php echo $post['id']?>" class="btn btn-danger btn-block">Delete</a>
					       	</div>
					       	<div class="col-6">
					       		<button type="button" class="btn btn-success btn-block" data-dismiss="modal">Cancel</button>	
					       	</div>
				    	</div>
			      	</div>
				   
		    	</div>
		  	</div>
		</div>
	 <?php }?>
</div>
</body>
<script type="text/javascript">
	// function newpost(){
	// 	console.log('added')
	// }

	$("#eliminar").click(function(){
	    $.post("delete.backend.php", {
	      nombre: "Juan Sanchez",
	      ciudad: "Ciudad de México"
	    },
	    function(informacion, estado){
	        alert("Información: " + informacion + "\nEstado: " + estado);
	    });
	});

	$(document).ready(function() {
    	$('#example').DataTable();
	} );
</script>
</html>