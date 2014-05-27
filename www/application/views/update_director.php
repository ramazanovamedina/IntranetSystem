<!DOSTUPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content ="text/html; charset=utf-8">
<script type = "text/javascript">
	
function b()
{
	var sel = $("#us").val();
	$.post("/directorprof/rdrct_director_up", {name:sel}, function(link){
		location.href = link;
	});
}
</script>
</head>
<div id="users">
	<form action="" method="post" class="form-horizontal">
		<select name="users" id="us" onchange= "b()">
			<option selected disabled value="default">Выберите сотрудника</option>
			<?php foreach($users as $user): ?>
				<option value="<?php echo $user; ?>"><?php echo $user; ?></option>
			<?php endforeach; ?>
		</select>
		<div id ="name"></div>
	</form>
</div>		
	