<head>
</head>
<fieldset>
	<legend><?php echo $subject_name?></legend>
	<table class="table table-bordered">
		<tr style = "background-color:#33CCCC">
			<th>ФИО учителя</th>
			<th>Файлы</th>
			<th>Расписание</th>
		</tr>
		<?php foreach($array as $arr){?>
			<tr>
				<td><?php echo $arr[0]?></td>
				<td><a href = "<?php echo URL::site('/files/a?uname='.$arr[1]);?>">Файлы</a></td>
				<td><a href = "<?php echo URL::site('/schedule/teacher_schedule?user='.$arr[2]);?>">Расписание</a></td>
			</tr>
		<?php } ?>
	</table>
</fieldset>