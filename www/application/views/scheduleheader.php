<!DOSTUPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content ="text/html; charset=utf-8">
<script type = "text/javascript">
	function a()
	{
		var sel = $("#classes").val();
		$.post("/schedule/rdrct_cr", {cl:sel}, function(link){
			location.href = link;
		});
	}	

</script>
</head>
<form action="" method="post" class="form-horizontal">
	<select name="classes" id="classes" onchange = "a()">
		<option selected disabled value="default">Выберите класс</option>
		<?php foreach($classes as $class): ?>
			<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
		<?php endforeach; ?>
	</select>
	<?php if($cl!=""){ ?>
		<script type="text/javascript">		
			var sel = document.getElementById('classes');
			var r = '<?php echo $cl; ?>';
			$(sel).val(r);
		</script>
	<?php } ?>
</form>
		
	