<head>
	<script src = "/public/js/jquery-1.7.1.js"></script>
	<script src="/public/js/bootstrap-tooltip.js"></script>  
	<script src="/public/js/bootstrap-popover.js"></script>  
	<script type = "text/javascript">
	$(document).ready(function(){
		$(".icon-comment2").popover({ 
	});
	});
	
	</script>
	<style type="text/css">
		.headcol {
				position:absolute;
				left:0;
				
		}
	</style>
</head>
<body>

<form action="" method="post" class="form-horizontal">
	<input type = "text" name = "secret" value = "<?php echo $subject?>" style = "display:none">
	<input type = "text" name = "secret2" value = "<?php echo $class?>" style = "display:none">
	<div style = "overflow:auto">
		<fieldset>
		<legend>Журнал</legend>
		<ul class="breadcrumb">
		  <li><a href="#"><?php if(isset($class)) echo $class ?></a> <span class="divider">/</span></li>
		  <li><a href="#"><?php if(isset($subject_name)) echo $subject_name ?></a> <span class="divider">/</span></li>
		  <li><a href="#"><?php if(isset($teacher_name)) echo $teacher_name ?></a></li>
		</ul>
		<table class="table table-bordered">
			<tr style = "background-color:#33CCCC">
				<th>№</th>
				<th>ФИО ученика</th>
				<?php for($i = 0; $i< count($quarter1); $i++){ ?><th><?php echo $quarter1[$i][0] ?></th> <?php } ?>
				<th><b>1 четверть</b></th>
				<?php for($i = 0; $i< count($quarter2); $i++){ ?><th><?php echo $quarter2[$i][0] ?></th> <?php } ?>
				<th><b>2 четверть</b></th>
				<?php for($i = 0; $i< count($quarter3); $i++){ ?><th><?php echo $quarter3[$i][0] ?></th> <?php } ?>
				<th><b>3 четверть</b></th>
				<?php for($i = 0; $i< count($quarter4); $i++){ ?><th><?php echo $quarter4[$i][0] ?></th> <?php } ?>
				<th><b>4 четверть</b></th>
				<th><b>Экзамен</b></th>
				<th><b>Год</b></th>
			</tr>
				
			<?php for($i = 0; $i< count($students); $i++){ ?>
				<?php $user_id = ORM::factory('us')->getUserIdByFullName($students[$i]); ?>
				<?php
					foreach ($overall_marks as $om)
					{
						foreach($om as $key=>$value)
						{
							if($key == 'quarter1/'.$user_id)
								$val3 = $value;
							if($key == 'quarter2/'.$user_id)
								$val4 = $value;
							if($key == 'quarter3/'.$user_id)
								$val5 = $value;
							if($key == 'quarter4/'.$user_id)
								$val6 = $value;
							if($key == 'exam/'.$user_id)
								$val7 = $value;
							if($key == 'overall/'.$user_id)
								$val8 = $value;
						}
					}
				?>
				<tr>
					<td><b><?php echo $i+1 ?></b></td>
					<td><b><?php echo $students[$i] ?></b></td>
					<?php for($j=0;$j<count($quarter1);$j++){?>
						<?php foreach($marks as $m)
								foreach($m as $key=>$value)
									if($key == $quarter1[$j][0]."/".$quarter1[$j][1]."/".$user_id)
										$val = $value; 
							foreach($attend as $a)
								foreach($a as $key=>$value)
									if($key == "att/".$quarter1[$j][0]."/".$quarter1[$j][1]."/".$user_id)
										$val2 = $value; 	
							$comment = ORM::factory('mark')->getComment($user_id, $subject, $quarter1[$j][1], $quarter1[$j][0]);
						 ?>
						<td <?php if (isset($val2)){ ?> style="background: #FF6699" <?php }?>><?php echo $val ?>
						<br>
						<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						</td>
					<?php } ?>
					<td><?php echo $val3 ?></td>
					<?php for($j=0;$j<count($quarter2);$j++){?>
						<?php foreach($marks as $m)
								foreach($m as $key=>$value)
									if($key == $quarter2[$j][0]."/".$quarter2[$j][1]."/".$user_id)
										$val = $value; 
							foreach($attend as $a)
									foreach($a as $key=>$value)
										if($key == "att/".$quarter2[$j][0]."/".$quarter2[$j][1]."/".$user_id)
											$val2 = $value; 	
							$comment = ORM::factory('mark')->getComment($user_id, $subject, $quarter2[$j][1], $quarter2[$j][0]);
						 ?>
						<td <?php if (isset($val2)){ ?> style="background: #FF6699" <?php }?>><?php echo $val ?>
						<br>
						<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						</td>
					<?php } ?>
					<td><?php echo $val4 ?></td>
					<?php for($j=0;$j<count($quarter3);$j++){?>
						<?php foreach($marks as $m)
								foreach($m as $key=>$value)
									if($key == $quarter3[$j][0]."/".$quarter3[$j][1]."/".$user_id)
										$val = $value; 
							foreach($attend as $a)
									foreach($a as $key=>$value)
										if($key == "att/".$quarter3[$j][0]."/".$quarter3[$j][1]."/".$user_id)
											$val2 = $value; 	
							$comment = ORM::factory('mark')->getComment($user_id, $subject, $quarter3[$j][1], $quarter3[$j][0]);
						 ?>
						<td <?php if (isset($val2)){ ?> style="background: #FF6699" <?php }?>><?php echo $val ?>
						<br>
						<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						</td>		
					<?php } ?>
					<td><?php echo $val5 ?></td>
					<?php for($j=0;$j<count($quarter4);$j++){?>
						<?php foreach($marks as $m)
								foreach($m as $key=>$value)
									if($key == $quarter4[$j][0]."/".$quarter4[$j][1]."/".$user_id)
										$val = $value; 
							foreach($attend as $a)
									foreach($a as $key=>$value)
										if($key == "att/".$quarter4[$j][0]."/".$quarter4[$j][1]."/".$user_id)
											$val2 = $value; 	
							$comment = ORM::factory('mark')->getComment($user_id, $subject, $quarter4[$j][1], $quarter4[$j][0]);
						 ?>
						<td <?php if (isset($val2)){ ?> style="background: #FF6699" <?php }?>><?php echo $val ?>
						<br>
						<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						</td>
					<?php } ?>
					<td><?php echo $val6 ?></td>
					<td><?php echo $val7 ?></td>
					<td><?php echo $val8 ?></td>
				</tr>
			<?php } ?>
		</table>
		</fieldset>
	</div>
</form>
</body>
