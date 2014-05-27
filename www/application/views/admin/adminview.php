<div class="alert alert-info">
	<strong><?php echo 'Здравствуйте, '.$username.'.' ?></strong>
	<p>Администратор системы</p>
</div>
<div class="alert alert-success">
	<strong>Сегодня день рождения празднуют:</strong>
	<br><br>
	<?php foreach($bd as $b){ ?>
			<p><?php echo $b["name"].', '.$b["role"] ?></p>
	<?php } ?>
</div>
