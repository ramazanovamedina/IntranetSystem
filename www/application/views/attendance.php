<head>
</head>
<body>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
			<?php if(isset($me)){?>
				<legend>Мои пропуски</legend>
			<?php }else {?>
				<legend>Пропуски учеников</legend>
			<?php } ?>
			<?php if(isset($classname)&isset($studentname)){?>
				<ul class="breadcrumb">
				  <li><a href="#"> <?php echo $classname ?></a> <span class="divider">/</span></li>
				  <li><a href="#"><?php echo $studentname ?></a></li>
				</ul>
			<?php } ?>
			<?php for($s = 0; $s < count($subjects); $s++){?>
				<?php $subject_id = ORM::factory('subject')->getSubjectIdByName($subjects[$s]) ?>
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
													<?php }}}}?> 
							</ul>
							<div class="tab-content">
							<?php foreach($array as $arr){
											foreach($arr as $key=>$value){
												if($key == $subject_id){
													for($ss = 1; $ss <= count($value); $ss++){ ?>
														<div <?php if ($q == $ss){?>class="tab-pane active"<?php } else{ ?>class="tab-pane"<?php }?> id="<?php echo 'tab'.$subject_id.$ss ?>">
														<table class="table table-bordered">
															<tr>
																<?php for($i = 0; $i< count($value["quarter".$ss]); $i++){
																		foreach($attend as $at)
																			foreach($at as $k=>$v)
																				if($k == $subject_id."/".$value["quarter".$ss][$i][0]."/".$value["quarter".$ss][$i][1])
																					$a = $v; ?>
																		<td <?php if (isset($a)){ ?> style="background: #FF0033" <?php }?>><b><?php echo $value["quarter".$ss][$i][0]?></b></td>
																<?php } ?>
															</tr>
															
														</table></div>
							<?php }}}}?>
							</div>
						</td>
					</tr>
				</table>
		<?php }?>
		</fieldset>
	</form>
</body>
