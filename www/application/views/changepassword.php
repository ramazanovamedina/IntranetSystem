<head>
<script type = "text/javascript">
function checkpass()
		{
			var oldpass = $("#oldpass").val();
			var user_id = $("#secret").val();
			$.ajax({
				type: "POST",
				data: {user_id: user_id, oldpass: oldpass},
				url: "/ajax/checkpass",
				dataType: "json",
				success: function(data)
				{
					if(!data)
						$("#error").css('display', 'inline');
					else
						$("#error").css('display', 'none');
				}
			})
		}
		
	$(document).ready(function(){
		$("#oldpass").blur(checkpass);
	});
</script>		
</head>
<form action="" method="post" class="form-horizontal">

	<input type = "text" id = "secret" value = "<?php echo $user_id ?>" style = "display:none">
	<fieldset>
    <legend>Изменение пароля</legend>
	<?php if(isset($ok)){?><div class="alert alert-success">Пароль изменен</div><?php } ?>
		<table>
			<th colspan = "2">
			<tr>
				<td>Старый пароль:</td>
				<td><input type="password" name = "oldpass" placeholder="Старый пароль"></td>
				<td><div id ="error" style="display:none" class="alert alert-error">Вы ввели неверный пароль</div></td>
				<?php if(isset($error_old)){?>
					<script>
						$("#error").css('display', 'inline');
					</script>
				<?php } ?>
			</tr>
			<tr>
				<td>Новый пароль:</td>
				<td><input type="password" name = "newpass" placeholder="Новый пароль"></td>
				<?php if(isset($empty)){?>
					<td><div class="alert alert-error">Поле Новый пароль должно быть заполнено</div></td>
				<?php } ?>
			</tr>
			<tr>
				<td>Повторите новый пароль:</td>
				<td><input type="password" name = "newpass2" placeholder="Повторите новый пароль"></td>
				<?php if(isset($error_new)){?>
					<td><div class="alert alert-error">Пароли не совпадают</div></td>
				<?php } ?>
			</tr>
		</table>
	</fieldset>
	<button type="submit" class="btn btn-primary" name="btnsubmit">Изменить</button>
</form>
