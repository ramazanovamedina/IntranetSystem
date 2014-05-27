<head>
	<link href="/public/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<script src="/public/js/bootstrap.min.js"></script>
	<script src = "/public/js/jquery-1.7.1.js"></script>
	<script src = "/public/js/bootstrap-dropdown.js"></script>
	<script src = "/public/js/bootstrap-alert.js"></script>
</head>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	<input type = "text" name = "secret" value = "<?php echo $upload_dir?>" style = "display:none">
	<fieldset>
	<legend>Загрузите файл</legend>
		<input type="hidden" name="MAX_FILE_SIZE" value="64000"> 
		<input type="file" name="files[]" multiple />
		<br>
		<button type="submit" name = "upload" class = "btn btn-primary">Загрузить</button>
	</fieldset>
</form>