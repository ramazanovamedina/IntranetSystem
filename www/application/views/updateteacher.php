<head>
<script src = "/public/js/bootstrap-modal.js"></script>
<script type = "text/javascript">
	function checkunique()
	{
		var login = $("#login").val();
		
		$.ajax({
			type: "POST",
			data: "login="+login,
			url: "/ajax/loginunique",
			dataType: "json",
			success: function(data)
			{
				//console.log(data);
				if(!data.result)
					$("#error").css('display', 'inline');
				else
					$("#error").css('display', 'none');
			}
		})
	}
	$(document).ready(function(){
		$("#login").blur(checkunique);
	});
	function del()
	{
		var sel = $("#teachers").text();
		$("#example").modal("show");
		var a = $("#secret2").text()+" "+sel+"?";
		$("#secret2").text(a);
	}
	$(function() {
		$("button#submit").click(function(){
			var sel = $("#teachers").text();
			$.post("/ajax/deleteteacher", {teacher:sel});
			$("#example").modal('hide');
			location.href = "/teacherprof/update_user";
		});
	});	
</script>
</head>
<body>
	<?php $usname = ORM::factory('us')->getFullNameById($qid); ?>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
		<legend>Обновление пользователя - учитель</legend>
		<div class="alert alert-info" id = "teachers"><?php echo $usname; ?></div>
		<?php if(isset($ok)){?><div class="alert alert-success">Пользователь обновлен</div><?php } ?>
		<input type = "text" id = "secret" name = "secret" style = "display:none" value="<?php echo $qid; ?>">
			<table>
				<tr>
					<td>ФИО:</td>
					<td><input type="text" name="full_name" id = "fio" size = 70 value="<?php echo $name ?>" class = "input-xxlarge"></td>
					<?php if(isset($empty_full_name)){ ?><td><div class="alert alert-success">Поле ФИО должно быть заполнено</div></td><?php } ?>
				</tr>
				<tr>
					<td>Пол:</td>
					<td>
						<select name = "gender" id = "gender" class = "input-medium">
							<option selected disabled value = "default">Выберите пол</option>
							<option value = "мужской">Мужской</option>
							<option value = "женский">Женский</option>
							<?php if($gender!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('gender');
								var r = '<?php echo $gender; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
					</td>
					<?php if(isset($empty_gender)){ ?><td><div class="alert alert-error">Поле Пол должно быть заполнено</div></td><?php } ?>
				</tr>
				<tr>
					<td>Логин:</td>
					<td><input type="text" id = "login" name="username" size = 70 value="<?php echo $username ?>" class = "input-xlarge"></td>
					<?php if(isset($empty_login)){ ?><td><div class="alert alert-success">Поле Логин должно быть заполнено</div></td><?php } ?>
					<td><div id ="error" style="display:none" class="alert alert-success">Такой Логин уже занят</div></td>
				</tr>
				<tr>
					<td>Дата рождения:</td>
					<td>
						<select name = "year" id = "year">
							<option selected disabled value="default" class = "input-small">Год</option>
							<?php foreach($years as $y){ ?>
								<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
							<?php } ?>
							<?php if($year!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('year');
								var r = '<?php echo $year; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
						<select name = "month" id = "month" class = "input-small">
							<option selected disabled value="default">Месяц</option>
							<?php foreach($months as $m){ ?>
								<option value="<?php echo $m; ?>"><?php echo $m; ?></option>
							<?php } ?>
							<?php if($month!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('month');
								var r = '<?php echo $month; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
						<select name = "day" id = "day" class = "input-small">
							<option selected disabled value="default">День</option>
							<?php foreach($days as $d){ ?>
								<option value="<?php echo $d; ?>"><?php echo $d; ?></option>
							<?php } ?>
							<?php if($day!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('day');
								var r = '<?php echo $day; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
					</td>
					<?php if(isset($empty_date_of_birth)){ ?><td><div class="alert alert-success">Поле Дата рождения должно быть заполнено</div></td><?php } ?>			
				</tr>
				<tr>
					<td>Адрес, телефон, эл.почта:</td>
					<td><textarea name="address" id = "address" class = "input-xxlarge" rows = "4"><?php echo $address ?></textarea></td>	
					<?php if(isset($empty_address)){ ?><td><div class="alert alert-success">Поле Адрес, телефон, эл.почта должно быть заполнено</div></td><?php } ?>
				</tr>
				<tr>
					<td>Документы:</td>
					<td><textarea name="docs" id = "docs" class = "input-xxlarge" rows = "4"><?php echo $documents ?></textarea></td>	
					<?php if(isset($empty_docs)){ ?><td><div class="alert alert-success">Поле Документы должно быть заполнено</div></td><?php } ?>
				</tr>	
				<tr>
					<td>Предмет(ы):</td>
					<td>
						<select name = "s[]" size = "8" id = "s" multiple>
							<?php foreach($subjects as $subject): ?>
							<option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
						<?php endforeach; ?>
						<?php if ($subs != ""){ ?>
							<script type="text/javascript">
								<?php for($i = 0; $i < count($subs); $i ++) {
										$r = $subs[$i]; ?>
										$('#s option[value='+'<?php echo $r ?>'+']').attr('selected', 'selected');
								<?php } ?>
							</script>
						<?php } ?>
						</select>
					</td>
				</tr>
			</table>
		</fieldset>
		<button type="submit" name="btnupdate" class = "btn btn-primary">Обновить</button>
	</form>
	
	<button type = "submit" name = "btndelete" class = "btn btn-danger" onclick = "del()">Удалить пользователя</button>

	<div id="example" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Удаление пользователя</h3>  
		</div> 
		<div>
			<form class="contact">
				<div class="modal-body">  
					<div id = "secret2"> Вы уверены, что хотите удалить пользователя </div>
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit">Да</button>  
			<a href="#" class="btn" data-dismiss="modal">Нет</a>  
		</div>  
	</div> 
</body>
