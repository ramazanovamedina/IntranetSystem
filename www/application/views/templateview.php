<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>МШ</title>
		<link href="/public/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="/public/css/font-awesome.min.css">
		<script src = "/public/js/bootstrap.min.js"></script>
		<script src = "/public/js/jquery-1.7.1.js"></script>
		<script src = "/public/js/bootstrap-dropdown.js"></script>
		<script src = "/public/js/bootstrap-alert.js"></script>	
	</head>
	<body>
		<div><?php echo $header; ?></div>
		<div class = "container">	
			<a href="<?php echo URL::site('/');?>"><img src = "/public/images/logo.png"></a>
			<br><br>
		</div>
		<div class = "container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<ul class = "nav nav-pills nav-stacked">
						<li class= "active"><a href = "#">Кафедры</a></li>
						<?php $subjects = ORM::factory('subject')->getAll();
							foreach($subjects as $subject){
								$id = ORM::factory('subject')->getSubjectIdByName($subject); ?>
							<li><a href = "<?php echo URL::site('/files/files?id='.$id);?>"><?php echo $subject ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="span10">
					<div><?php echo $roles; ?></div>
					<div><?php echo $test; ?></div>
					<div><?php echo $content; ?></div> 
				</div>
			</div>
		</div>
		
	</body>

</html>