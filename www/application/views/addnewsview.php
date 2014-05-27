<head>
	<script src="/ckeditor/ckeditor.js"></script>
</head>

<form action="" method="post" class="form-horizontal">
	<fieldset>
		<legend>Добавьте новость на главную страницу</legend>
		<?php if(isset($ok)){?><div class="alert alert-success">Новость опуликована</div><?php } ?>
		<table>
			<tr>
				<td>Заголовок:</td>
				<td><textarea name="title" placeholder="Заголовок" class = "input-xxlarge" rows = "2"><?php echo $title ?></textarea></td>
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
		</table>
		<button type="submit" class = "btn btn-primary" name="btnsubmit">Опубликовать</button>
	</fieldset>
</form>
