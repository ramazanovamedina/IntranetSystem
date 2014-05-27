<div class="alert alert-info">
	<strong><?php echo 'Здравствуйте, '.$username.'.' ?></strong>
	<p><?php echo "Учитель предметов: " ?><?php for($i = 0; $i < sizeof($subs); $i++){ 
													if($i == sizeof($subs)-1){ 
															echo $subs[$i]; 
													} else{ 
														echo $subs[$i].', ';
													} 
										} ?></p>
</div>
<div class="alert alert-success">
	<strong>Сегодня день рождения празднуют:</strong>
	<br><br>
	<?php foreach($bd as $b){ ?>
			<p><?php echo $b["name"].', '.$b["role"] ?></p>
	<?php } ?>
</div>

