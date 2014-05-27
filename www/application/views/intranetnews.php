<head>
<script src="/ckeditor/ckeditor.js"></script>
<script type = "text/javascript">
	function all_checked(ch)
	{
		if(ch.checked)
		{
			document.getElementById('direktor').disabled = true;
			document.getElementById('or').disabled = true;
			document.getElementById('teacher_all').disabled = true;
			document.getElementById('subject').disabled = true;
			document.getElementById('student_all').disabled = true;
			document.getElementById('classes').disabled = true;
			document.getElementById('parent_all').disabled = true;
			document.getElementById('classes2').disabled = true;
		}
		else
		{
			document.getElementById('direktor').disabled = false;
			document.getElementById('or').disabled = false;
			document.getElementById('teacher_all').disabled = false;
			document.getElementById('subject').disabled = false;
			document.getElementById('student_all').disabled = false;
			document.getElementById('classes').disabled = false;
			document.getElementById('parent_all').disabled = false;
			document.getElementById('classes2').disabled = false;
		}
		
	}
	function teachers_checked(ch)
	{
		if(ch.checked)
			document.getElementById('subject').disabled = true;
		else
			document.getElementById('subject').disabled = false;
	}
	function students_checked(ch)
	{
		if(ch.checked)
			document.getElementById('classes').disabled = true;
		else
			document.getElementById('classes').disabled = false;
	}
	function parents_checked(ch)
	{
		if(ch.checked)
			document.getElementById('classes2').disabled = true;
		else
			document.getElementById('classes2').disabled = false;
	}
</script>
</head>
<body>
<form action="" method="post" class="form-horizontal">
	<fieldset>
		<legend> Выберите адресат(ов) </legend>
		<?php if(isset($ok)){?><div class="alert alert-success">Новость опубликована</div><?php } ?>
		<?php if(isset($empty_recievers)){ ?><div class="alert alert-error">Выберите адресатов</div><?php } ?>
			<input type = "checkbox" name = "all" value = "all" onchange = "all_checked(this)"> Все
			<br><br>
		<table class="table table-bordered">
			<tr>
				<td>Директор</td>
				<td>Офис регистратора</td>
				<td>Учителя</td>
				<td>Ученики</td>
				<td>Родители</td>
			</tr>
			<tr>
				<td><input type = "checkbox" name = "director" value = "director" id = "director"> Директор</td>
				<td><input type = "checkbox" name = "or" value = "or" id = "or"> Офис регистратора</td>
				<td>
					<input type = "checkbox" name = "teacher_all" value = "teacher_all" id = "teacher_all" onchange = "teachers_checked(this)"> Все
					<br><br>
					<select multiple name = "subject[]" id = "subject">
						<?php foreach($subjects as $subject){ ?>
							<option value = "<?php echo $subject ?>"><?php echo $subject ?></option>
						<?php } ?>
					</select>
				</td>
				<td>
					<input type = "checkbox" name = "student_all" value = "student_all" id = "student_all" onchange = "students_checked(this)"> Все
					<br><br>
					<select multiple name = "classes[]" id = "classes">
						<?php foreach($classes as $class){ ?>
							<option><?php echo $class ?></option>
						<?php } ?>
					</select>
				</td>
				<td>
					<input type = "checkbox" name = "parent_all" value = "parent_all" id = "parent_all" onchange = "parents_checked(this)"> Все
					<br><br>
					<select multiple name = "classes2[]" id = "classes2">
						<?php foreach($classes as $class){ ?>
							<option><?php echo $class ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
	<legend>Опубликуйте новость</legend>
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
	</fieldset>
	<button type = "submit" class = "btn btn-primary" name = "btnsubmit">Опубликовать</button>
	
</form>
</body>
