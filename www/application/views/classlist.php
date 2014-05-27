<head>
</head>
<body>
	<fieldset>
		<legend>Список класса</legend>
		<table class="table table-bordered">
			<th style = "background-color:#33CCCC">№</th>
			<th style = "background-color:#33CCCC">ФИО</th>
			<th style = "background-color:#33CCCC">День рождения</th>
			<?php for($i = 0; $i < sizeof($students); $i++){ ?>
					<tr><td><?php echo $i+1 ?></td><td><?php echo $students[$i]["name"]?></td><td><?php echo $students[$i]["bday"]?></td></tr>
			<?php } ?>
		</table>
	</fieldset>
</body>
