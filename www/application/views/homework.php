<head>
</head>
<body>
<form action="" method="post" class="form-horizontal">
	<input type = "text" name = "secret" style = "display:none" value = "<?php echo $subject ?>">
	<input type = "text" name = "secret2" style = "display:none" value = "<?php echo $class ?>">
	<div style = "overflow:auto">
		<fieldset>
		<legend>Задайте домашнее задание</legend>
		<?php if(isset($ok)){?><div class="alert alert-success">Сохранено</div><?php } ?>
			<ul class="breadcrumb">
			  <li><a href="#"><?php if(isset($subject_name)) echo $subject_name ?></a> <span class="divider">/</span></li>
			  <li><a href="#"><?php if(isset($class)) echo $class ?></a></li>
			</ul>
			
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<?php for ($s = 1; $s <= 4; $s++){?>
						<li><a href="<?php echo '#tab'.$s ?>" data-toggle="tab"><?php echo $s.' четверть'?></a></li>
					<?php } ?>
				</ul>
				<div class="tab-content">
					<div <?php if ($q == 1){?>class="tab-pane active"<?php } else{ ?>class="tab-pane"<?php }?> id="tab1">
						<table class="table table-bordered">
							<tr style = "background-color:#33CCCC">
								<th>Дата</th>
								<th>Домашнее задание</th>
							</tr>
						<?php for($i=0;$i<count($quarter1);$i++){
								foreach($homeworks as $h)
									foreach($h as $key=>$value)
										if($key == $quarter1[$i][0]."/".$quarter1[$i][1])
											$val = $value; ?>
							<tr>
								<td><?php echo $quarter1[$i][0] ?></td>
								<td><textarea <?php if(strtotime($quarter1[$i][0])<$cur_date){?>readonly <?php } ?> name = "<?php echo $quarter1[$i][0].'/'.$quarter1[$i][1]?>" class = "input-xxlarge" rows = "3"><?php echo $val ?></textarea></td>
							</tr>
						<?php } ?>
						</table>
					</div>
					<div <?php if ($q == 2){?>class="tab-pane active"<?php } else{ ?>class="tab-pane"<?php }?> id="tab2">
						<table class="table table-bordered">
							<tr style = "background-color:#33CCCC">
								<th>Дата</th>
								<th>Домашнее задание</th>
							</tr>
						<?php for($i=0;$i<count($quarter2);$i++){
								foreach($homeworks as $h)
									foreach($h as $key=>$value)
										if($key == $quarter2[$i][0]."/".$quarter2[$i][1])
											$val = $value; ?>
							<tr>
								<td><?php echo $quarter2[$i][0] ?></td>
								<td><textarea <?php if(strtotime($quarter2[$i][0])<$cur_date){?>readonly <?php } ?> name = "<?php echo $quarter2[$i][0].'/'.$quarter2[$i][1]?>" class = "input-xxlarge" rows = "3"><?php echo $val ?></textarea></td>
							</tr>
						<?php } ?>
						</table>
					</div>
					<div <?php if ($q == 3){?>class="tab-pane active"<?php } else{ ?>class="tab-pane"<?php }?> id="tab3">
						<table class="table table-bordered">
							<tr style = "background-color:#33CCCC">
								<th>Дата</th>
								<th>Домашнее задание</th>
							</tr>
						<?php for($i=0;$i<count($quarter3);$i++){
								foreach($homeworks as $h)
									foreach($h as $key=>$value)
										if($key == $quarter3[$i][0]."/".$quarter3[$i][1])
											$val = $value; ?>
							<tr>
								<td><?php echo $quarter3[$i][0] ?></td>
								<td><textarea <?php if(strtotime($quarter3[$i][0])<$cur_date){?>readonly <?php } ?> name = "<?php echo $quarter3[$i][0].'/'.$quarter3[$i][1]?>" class = "input-xxlarge" rows = "3"><?php echo $val ?></textarea></td>
							</tr>
						<?php } ?>
						</table>
					</div>
					<div <?php if ($q == 4){?>class="tab-pane active"<?php } else{ ?>class="tab-pane"<?php }?> id="tab4">
						<table class="table table-bordered">
							<tr style = "background-color:#33CCCC">
								<th>Дата</th>
								<th>Домашнее задание</th>
							</tr>
						<?php for($i=0;$i<count($quarter4);$i++){
								foreach($homeworks as $h)
									foreach($h as $key=>$value)
										if($key == $quarter4[$i][0]."/".$quarter4[$i][1])
											$val = $value; ?>
							<tr>
								<td><?php echo $quarter4[$i][0] ?></td>
								<td><textarea <?php if(strtotime($quarter4[$i][0])<$cur_date){?>readonly <?php } ?> name = "<?php echo $quarter4[$i][0].'/'.$quarter4[$i][1]?>" class = "input-xxlarge" rows = "3"><?php echo $val ?></textarea></td>
							</tr>
						<?php } ?>
						</table>
					</div>
				</div>
			</div>
			
		</fieldset>	
	</div>
	<button type = "submit"  class = "btn btn-primary" name="btn">Сохранить</button>
</form>
</body>
