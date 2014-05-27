<head>
	<script src = "/public/js/bootstrap-modal.js"></script>
	<script src="/public/js/bootstrap-tooltip.js"></script>  
	<script src="/public/js/bootstrap-popover.js"></script>  
<style type="text/css">
	.headcol {
			position:absolute;
			left:0;
			
	}
</style>
<script>
		$(document).ready(function(){
			$(".icon-comment2").popover({ 
			});
		});
		 $(function() {
			$("button#submit").click(function(){
				var comm = $("#com").val();
				var date = $("#date").val();
				var user = $("#user").val();
				var order = $("#order").val();
				var subject = $("#subject").val();
					$.ajax({
						type: "POST",
						url: "/ajax/setcomment",
						data: {comm:comm, user:user, date:date, order:order, subject:subject},
						success: function(msg){
							$("#example").modal('hide');					
						}
					});
					return false;
			});
		});
		function showcomm(date, order, user, username, subject) {
			$("#user").val(user);
			$("#username").val(username);
			$("#date").val(date);
			$("#order").val(order);
			$("#subject").val(subject);
			$.ajax({
				type: "POST",
				url: "/ajax/getcomment",
				data: {date:date, order:order, user:user, subject:subject},
				dataType: "json",
				success: function(msg){	
					$("#com").val(msg);
				}
			});
		};
</script>
</head>
<body>
<?php $zz = array(); ?>
<form action="" method="post" class="form-horizontal">
	<input type = "text" name = "secret" value = "<?php echo $subject?>" style = "display:none">
	<input type = "text" name = "secret2" value = "<?php echo $class?>" style = "display:none">
	<div style = "overflow:auto">
		<fieldset>
		<legend>Журнал</legend>
		<?php if(isset($ok)){?><div class="alert alert-success">Сохранено</div><?php } ?>
		<ul class="breadcrumb">
			<li><a href="#"><?php if(isset($subject_name)) echo $subject_name ?></a> <span class="divider">/</span></li>
			<li><a href="#"><?php if(isset($class)) echo $class ?></a></li>
		</ul>
		<table class="table table-bordered">
			<tr style = "background-color:#33CCCC">
				<th rowspan =2>№</th>
				<th rowspan =2>ФИО ученика</th>
				<?php for($i = 0; $i< count($quarter1); $i++){ ?><th colspan = 2><?php echo $quarter1[$i][0] ?></th> <?php } ?>
				<th rowspan = 2><b>1 четверть</b></th>
				<?php for($i = 0; $i< count($quarter2); $i++){ ?><th colspan = 2><?php echo $quarter2[$i][0] ?></th> <?php } ?>
				<th rowspan = 2><b>2 четверть</b></th>
				<?php for($i = 0; $i< count($quarter3); $i++){ ?><th colspan = 2><?php echo $quarter3[$i][0] ?></th> <?php } ?>
				<th rowspan = 2><b>3 четверть</b></th>
				<?php for($i = 0; $i< count($quarter4); $i++){ ?><th colspan = 2><?php echo $quarter4[$i][0] ?></th> <?php } ?>
				<th rowspan = 2><b>4 четверть</b></th>
				<th rowspan = 2><b>Экзамен</b></th>
				<th rowspan = 2><b>Год</b></th>
			</tr>
			<tr>
			<!--	<td></td>-->
				<?php for($i = 0; $i< count($quarter1); $i++){ ?><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>О</td><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>П</td><?php } ?>
				<?php for($i = 0; $i< count($quarter2); $i++){ ?><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>О</td><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>П</td><?php } ?>
				<?php for($i = 0; $i< count($quarter3); $i++){ ?><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>О</td><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>П</td><?php } ?>
				<?php for($i = 0; $i< count($quarter4); $i++){ ?><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>О</td><td <?php if($i%2==0){?>style = "background-color:#66FFFF"<?php } else {?>style = "background-color:#99FFCC"<?php } ?>>П</td><?php } ?>
				
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
						<td><input type = "text" class = "input-mini" <?php if($q1 == "true"){?> readonly <?php } ?> name = "<?php echo $quarter1[$j][0]."/".$quarter1[$j][1]."/".$user_id ?>" value = "<?php echo $val ?>">
						<?php if($q1 == "true"){?>
							<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						<?php } else { ?>
							<a data-toggle="modal" href="#example" onclick = "showcomm('<?php echo $quarter1[$j][0] ?>', '<?php echo $quarter1[$j][1] ?>', '<?php echo $user_id ?>', '<?php echo $students[$i]?>', '<?php echo $subject ?>')" ><?php if($comment!=""){?><i class = "icon-comment2" style = "color:green"></i><?php } else {?><i class = "icon-comment2" style = "color:orange"></i><?php }?></a>
						<?php } ?>
						</td>
						<td><input type = "checkbox" <?php if($q1 == "true"){?> onclick = "return false;" <?php } ?> size = 2 name = "<?php echo "att/".$quarter1[$j][0]."/".$quarter1[$j][1]."/".$user_id ?>" <?php echo $val2 ?> value = "checked"></td>
					<?php } ?>
					<td><input type = "text" class = "input-mini" <?php if($q1 == "true"){?> readonly <?php } ?> name = "<?php echo "quarter1/".$user_id ?>" value = "<?php echo $val3 ?>" ></td>
					
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
						<td><input type = "text" class = "input-mini" <?php if($q2 == "true"){?> readonly <?php } ?> name = "<?php echo $quarter2[$j][0]."/".$quarter2[$j][1]."/".$user_id ?>" value = "<?php echo $val ?>">
						<?php if($q2 == "true"){?>
							<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						<?php } else { ?>
							<a data-toggle="modal" href="#example" onclick = "showcomm('<?php echo $quarter2[$j][0] ?>', '<?php echo $quarter2[$j][1] ?>', '<?php echo $user_id ?>',  '<?php echo $students[$i]?>', '<?php echo $subject ?>')" ><?php if($comment!=""){?><i class = "icon-comment2" style = "color:green"></i><?php } else {?><i class = "icon-comment2" style = "color:orange"></i><?php }?></a>
						<?php } ?>
						</td>
						<td><input type = "checkbox" <?php if($q2 == "true"){?> onclick = "return false;" <?php } ?> size = 2 name = "<?php echo "att/".$quarter2[$j][0]."/".$quarter2[$j][1]."/".$user_id ?>" <?php echo $val2 ?> value = "checked"></td>
					<?php } ?>
					<td><input type = "text" class = "input-mini" <?php if($q2 == "true"){?> readonly <?php } ?> name = "<?php echo "quarter2/".$user_id ?>" value = "<?php echo $val4 ?>" ></td>
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
						<td><input type = "text" class = "input-mini" <?php if($q3 == "true"){?> readonly <?php } ?> name = "<?php echo $quarter3[$j][0]."/".$quarter3[$j][1]."/".$user_id ?>" value = "<?php echo $val ?>">						
						<?php if($q3 == "true"){?>
							<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						<?php } else { ?>
							<a data-toggle="modal" href="#example" onclick = "showcomm('<?php echo $quarter3[$j][0] ?>', '<?php echo $quarter3[$j][1] ?>', '<?php echo $user_id ?>',  '<?php echo $students[$i]?>', '<?php echo $subject ?>')" ><?php if($comment!=""){?><i class = "icon-comment2" style = "color:green"></i><?php } else {?><i class = "icon-comment2" style = "color:orange"></i><?php }?></a>
						<?php } ?>
						</td>
						<td><input type = "checkbox" <?php if($q3 == "true"){?> onclick = "return false;" <?php } ?> size = 2 name = "<?php echo "att/".$quarter3[$j][0]."/".$quarter3[$j][1]."/".$user_id ?>" <?php echo $val2 ?> value = "checked"></td>
					<?php } ?>
					<td><input type = "text" class = "input-mini" <?php if($q3 == "true"){?> readonly <?php } ?> name = "<?php echo "quarter3/".$user_id ?>" value = "<?php echo $val5 ?>"></td>
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
						<td><input type = "text" class = "input-mini" <?php if($q4 == "true"){?> readonly <?php } ?> name = "<?php echo $quarter4[$j][0]."/".$quarter4[$j][1]."/".$user_id ?>" value = "<?php echo $val ?>">
						<?php if($q4 == "true"){?>
							<?php if($comment!=""){?><i class = "icon-comment2" style = "color:green" rel = 'popover' data-html='true' data-content="<div><?php echo $comment?></div>"  data-original-title='Комментарий к оценке'></i><?php } ?>
						<?php } else { ?>
							<a data-toggle="modal" href="#example" onclick = "showcomm('<?php echo $quarter4[$j][0] ?>', '<?php echo $quarter4[$j][1] ?>', '<?php echo $user_id ?>',  '<?php echo $students[$i]?>', '<?php echo $subject ?>')" ><?php if($comment!=""){?><i class = "icon-comment2" style = "color:green"></i><?php } else {?><i class = "icon-comment2" style = "color:orange"></i><?php }?></a>
						<?php } ?>
						</td>
						<td><input type = "checkbox" <?php if($q4 == "true"){?> onclick = "return false;" <?php } ?> size = 2 name = "<?php echo "att/".$quarter4[$j][0]."/".$quarter4[$j][1]."/".$user_id ?>" <?php echo $val2 ?> value = "checked"></td>
					<?php } ?>
					<td><input type = "text" class = "input-mini" <?php if($q4 == "true"){?> readonly <?php } ?> name = "<?php echo "quarter4/".$user_id ?>" value = "<?php echo $val6 ?>"></td>
					<td><input type = "text" class = "input-mini" <?php if($q4 == "true"){?> readonly <?php } ?> name = "<?php echo "exam/".$user_id ?>" value = "<?php echo $val7 ?>"></td>
					<td><input type = "text" class = "input-mini" <?php if($q4 == "true"){?> readonly <?php } ?> name = "<?php echo "overall/".$user_id ?>" value = "<?php echo $val8 ?>"></td>
				</tr>
			<?php } ?>
		</table>
		</fieldset>
	</div>
	<button type = "submit" class = "btn btn-primary" name="btn">Сохранить</button>
</form>
	<div id="example" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Комментарий к оценке</h3>  
		</div> 
		<div>
			<form class="contact">
				<div class="modal-body">  
					<label>ФИО ученика:</label>
					<input type = "text" id = "username" class = "input-xxlarge" readonly>
					<input type = "text" id = "user" style = "display:none">
					<label>Дата:</label>
					<input type = "text" id = "date" readonly>
					<label>Урок:</label>
					<input type = "text" id = "order" readonly>
					<input type = "text" id = "subject" style = "display:none">
					<label>Комментарий:</label>
					<textarea id = "com" class = "input-xxlarge" rows = "3"></textarea>             
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit">Сохранить</button>  
			<a href="#" class="btn" data-dismiss="modal">Закрыть</a>  
		</div>  
	</div>  

</body>
