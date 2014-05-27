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
	
</head>

<form action="" method="post" class="form-horizontal">
	<?php for($i = 1; $i<= count($days); $i++){?>
		<span class="label label-info"><?php echo date('l', strtotime($week_days[$i])).', '.$week_days[$i] ?></span>
		<table  class="table table-bordered">
			<tr style = "background-color:#33CCCC">
				<th width = "30">№</th>
				<th width = "160">Предмет</th>
				<th width = "460">Домашнее задание</th>
				<th width = "60">Оценка</th>
			</tr>
			<?php for($j = 1; $j <=7; $j++){?>
				<?php $subject_id = $week_array[$i-1][$j][0] ?>
				<?php $comment = ORM::factory('mark')->getComment($student_id, $subject_id, $j, date("Y.m.d", strtotime($week_days[$i])));?>
				<tr>
					<td><?php echo $j ?></td>
					<td><?php echo ORM::factory('subject')->getSubjectNameById($week_array[$i-1][$j][0]) ?></td>
					<td><font color = "blue"><?php echo $week_array[$i-1][$j][1] ?></td>
					<td style = "text-align: center"><font color = "red"><b><?php echo $week_array[$i-1][$j][2] ?></b></font>
					<?php if($comment!=""){?><i class = "icon-comment2" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке' data-placement = "left" style = "color:#33CCCC"></i><?php } ?>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } ?>
	
</form>
