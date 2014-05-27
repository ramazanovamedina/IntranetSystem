<head>
</head>
<body>
<form action="" method="post" class="form-horizontal">
		<fieldset>
		<legend>Мои оценки</legend>
		<?php for($s = 0; $s < count($subjects); $s++){?>
			<?php $subject_id = ORM::factory('subject')->getSubjectIdByName($subjects[$s]) ?>
			<?php $val = array();
					foreach ($overall_marks as $om)
					{
						foreach($om as $key=>$value)
						{
							if($key == 'quarter1/'.$subject_id)
								$val[1] = $value;
							if($key == 'quarter2/'.$subject_id)
								$val[2] = $value;
							if($key == 'quarter3/'.$subject_id)
								$val[3] = $value;
							if($key == 'quarter4/'.$subject_id)
								$val[4] = $value;
							if($key == 'exam/'.$subject_id)
								$val[5] = $value;
							if($key == 'overall/'.$subject_id)
								$val[6] = $value;
						}
					}
				?>
				<table class="table table-bordered" style = "table-layout:fixed;">
					<tr>
						<td style = "background-color:#66CCFF" width = "100"><b><?php echo $subjects[$s]?></b></td>
						<td>
							<ul class="nav nav-tabs">
								<?php foreach($array as $arr){
										foreach($arr as $key=>$value){
											if($key == $subject_id){
												for($ss = 1; $ss <= count($value); $ss++){ 
													?>
													<li <?php if($q == $ss){?>class = "active"<?php } ?>><a href = "<?php echo '#tab'.$subject_id.$ss ?>" data-toggle="tab"><?php echo $ss.' четверть'?></a></li>
												<?php } ?>
													<li><a href = <?php echo '#over'.$subject_id ?> data-toggle = "tab">Итог</a></li>
												<?php }}}?> 
							</ul>
							<div class="tab-content">
							<?php foreach($array as $arr){
										foreach($arr as $key=>$value){
											if($key == $subject_id){
												for($ss = 1; $ss <= count($value); $ss++){ ?>
													<div <?php if ($q == $ss){?>class="tab-pane active"<?php } else{ ?>class="tab-pane"<?php }?> id="<?php echo 'tab'.$subject_id.$ss ?>">
														<table class="table table-bordered">
															<tr>
															<?php for($i = 0; $i< count($value["quarter".$ss]); $i++){?>
																	<td><b><?php echo $value["quarter".$ss][$i][0]?></b></td><?php } ?>
																	<td><b><?php echo "Итог ".$ss." четверть" ?></b></td>
															</tr>
															<tr>
															<?php for($i = 0; $i< count($value["quarter".$ss]); $i++){
																	foreach($marks as $mark)
																		foreach($mark as $k=>$v)
																			if($k == $value["quarter".$ss][$i][0]."/".$value["quarter".$ss][$i][1]."/".$subject_id){?> 
																				<td style = "color:red"><b><?php echo $v ?></b></td>
															<?php }} ?>
																<td style = "color:red"><b><?php echo $val[$ss] ?></b></td>	
															</tr>
														</table>
													</div>
														<?php } ?>
													<div class = "tab-pane" id = "<?php echo 'over'.$subject_id ?>">
														<table class="table table-bordered">
															<tr>
																<td><b><?php echo "Экзамен" ?></b></td>
																<td><b><?php echo "Итог за год" ?></b></td>
															</tr>
															<tr>
																<td style = "color:red"><b><?php echo $val[5] ?></b></td>
																<td style = "color:red"><b><?php echo $val[6] ?></b></td>
															</tr>
														</table>
													</div>
											<?php }}}?>
						</td>
					</tr>
				</table>
	<?php }?>
	</fieldset>

	
</form>
</body>
