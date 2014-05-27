<div class="alert alert-info">
	<strong><?php echo 'Здравствуйте, '.$mot.' / '.$fat; ?></strong>
	<p><?php if ($gender=='женский'){ echo "Ваш ребенок ".$student_name.", ученица ".$c." класса"; }
									else { echo "Ваш ребенок ".$student_name.", ученик".$c." класса"; } ?></p>
</div>
<div class="alert alert-success">
	<strong>Сегодня день рождения празднуют:</strong>
	<br><br>
	<?php foreach($bd as $b){ ?>
			<p><?php echo $b["name"].', '.$b["role"] ?></p>
	<?php } ?>
</div>
