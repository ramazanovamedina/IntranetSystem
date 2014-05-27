<head>
	<script src="/ckeditor/ckeditor.js"></script>
</head>

<form action="" method="post" class="form-horizontal">
	<fieldset>
    <legend>Исправьте новость</legend>
		<table>
			<tr>
				<td>Заголовок:</td>
				<td><textarea name="title" class = "input-xxlarge" rows = "2"><?php echo $title ?></textarea></td>
				<?php if(isset($empty_title)){ ?><td><div class="alert alert-error">Поле Заголовок должно быть заполнено</div></td><?php } ?>
			</tr>
			<tr>
				<td>Содержание:</td>
				<td><textarea name="text"><?php echo $cont ?></textarea></td>
				<script>
					CKEDITOR.replace('text');
				</script>
				<?php if(isset($empty_content)){ ?><td><div class="alert alert-error">Поле Содержание должно быть заполнено</div></td><?php } ?>
			</tr>
			<input type = "hidden" value = <?php echo $_SERVER['HTTP_REFERER']?>  name="edit">
		</table>
		<button type="submit" class = "btn btn-primary" name="btnsubmit">Сохранить</button>
	</fieldset>
	
</form>