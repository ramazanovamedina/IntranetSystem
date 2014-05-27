<head>
	<script type = "text/javascript">
		function a()
		{
			var sel = $("#classes").val();
			$.post("/schedule/rdrct_cl", {cl:sel}, function(link){
			location.href = link;
			});
		}
	</script>
</head>
<body>
	<form action="" method="post" class="form-horizontal">
		<select name="classes" id="classes" onchange = "a()">
			<option selected disabled value="default">Выберите класс</option>
			<?php foreach($classes as $class): ?>
				<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
			<?php endforeach; ?>
		</select>
	
	</form>
</body>
