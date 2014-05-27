<!DOSTUPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content ="text/html; charset=utf-8">
<script type = "text/javascript">
	function changerole()
	{
		var sel = $("#sel").val();
		console.log(sel);
		$.post("/user/change_up", {s:sel}, function(link){
			location.href = link;
		});
	}
</script>
</head>
<form action="" method="post" class="form-horizontal">
		<select name ="sel" id ="sel" onchange="changerole()">
			<option selected>Выберите роль пользователя</option>
			<?php $r = new Role(); $roles = $r->getAll(); ?>
			<?php foreach($roles as $role): ?>
				<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
			<?php endforeach; ?>
		</select>
</form>	

