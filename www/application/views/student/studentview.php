<div class="alert alert-info">
	<strong><?php echo 'Здравствуйте, '.$username.'.' ?></strong>
	<p><?php if ($gender=='женский'){ echo "Ученица ".$c." класса"; } else { echo "Ученик".$c." класса"; } ?></p>
</div>
<div class="alert alert-success">
	<strong>Сегодня день рождения празднуют:</strong>
	<br><br>
	<?php foreach($bd as $b){ ?>
			<p><?php echo $b["name"].', '.$b["role"] ?></p>
	<?php } ?>
</div>

