<!DOCTYPE html>
<html>
<head>
	<title>Show post</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap/aos.css">
<script type="text/javascript" src="bootstrap/aos.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div class="container-fluid">
	<div class="container itm-top">
		<div class="row justify-content-md-center">
			<div class="col-10 col bg-white">
				<div class="position-relative pt-3">
				<img data-aos="fade-up"  data-aos-duration="2000" class=" img-fluid" src="photos/<?php echo $postId['thumb']?>">	
				<h1 data-aos="zoom-in-right" data-aos-delay="1000" class="display-4 font-weight-bold" style="position:absolute;bottom:10px; left: 30px; color: #fff;text-shadow: 5px 2px 6px black, 0 0 1em #000000, 0 0 0em #000000;"><?php echo $postId['title']?></h1>
				</div>
				
				<div class=" mt-2 p-4">
					<p><?php echo $postId['content']?></p>
					<hr>
					<div class="row">
						<div class="col">	
							<p><strong class="text-primary">Posted date:</strong> <?php echo fecha($postId['creatAt'])?></p>
						</div>
						<div class="col">	
							<p class="text-right"><strong class="text-primary">Posted by:</strong>  <?php echo $postId['postBy']?> </p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>
</div>
</body>
	<script>
  		AOS.init();
	</script>
</html>