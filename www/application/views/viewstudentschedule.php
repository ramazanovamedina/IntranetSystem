<head>
<script type = "text/javascript">
</script>		
</head>
<form action="" method="post" class="form-horizontal">

<?php $b = array(array("Monday1", "Tuesday1", "Wednesday1", "Thursday1", "Friday1", "Saturday1"),
				array("Monday2", "Tuesday2", "Wednesday2", "Thursday2", "Friday2", "Saturday2"),
				array("Monday3", "Tuesday3", "Wednesday3", "Thursday3", "Friday3", "Saturday3"),
				array("Monday4", "Tuesday4", "Wednesday4", "Thursday4", "Friday4", "Saturday4"),
				array("Monday5", "Tuesday5", "Wednesday5", "Thursday5", "Friday5", "Saturday5"),
				array("Monday6", "Tuesday6", "Wednesday6", "Thursday6", "Friday6", "Saturday6"),
				array("Monday7", "Tuesday7", "Wednesday7", "Thursday7", "Friday7", "Saturday7")); ?>
				
<?php $a = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); ?>
	<fieldset>
		<?php if(isset($me)){?>
			<legend>Мое расписание</legend>
		<?php }else {?>
			<legend>Расписание классов</legend>
			<?php if($classname!=""){?><div class="alert alert-info"><?php echo $classname; ?></div><?php } ?>
		<?php }?>
		<table class="table table-bordered">
			<tr style = "background-color:#33CCCC">
				<th>Понедельник</th>
				<th>Вторник</th>
				<th>Среда</th>
				<th>Четверг</th>
				<th>Пятница</th>
				<th>Суббота</th>
			</tr>	
			<?php for($i = 0; $i < 7; $i++){ ?>
				<tr>
					<?php for($j = 0; $j <6; $j++){ ?>
						<td>
							Урок <?php echo $i+1; ?>
							<br><input type = "text" readonly id = "sub<?php echo $b[$i][$j];?>" name = "sub<?php echo $b[$i][$j];?>" value = "<?php echo $array[$a[$j]][$i+1][0]?>" class = "input-large">
							<br><input type = "text" readonly id = "teach<?php echo $b[$i][$j];?>" name = "teach<?php echo $b[$i][$j];?>" value = "<?php echo $array[$a[$j]][$i+1][1]?>" class = "input-large">
						</td>
				<?php }?>
				</tr>
			<?php } ?>			
		</table>
	</fieldset>

</form>
