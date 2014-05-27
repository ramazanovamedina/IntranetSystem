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
				console.log(data);
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
		var sel = $("#parents").text();
		$("#example").modal("show");
		var a = $("#secret").text()+" "+sel+"?";
		$("#secret").text(a);
	}
	$(function() {
		$("button#submit").click(function(){
			var sel = $("#login").val();
			$.post("/ajax/deleteparent", {parent:sel});
			$("#example").modal('hide');
			location.href = "/parentprof/update_user";
		});
	});
</script>		
</head>
<body>
	<?php $childname = ORM::factory('us')->getFullNAmeById(ORM::factory('userinfo')->getChildIdByParentId($qid)); ?>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
		<legend>Обновление пользователя - родитель</legend>
		<?php if(isset($childname)){ ?><div class="alert alert-info" id = "parents">Родители ученика <?php echo $childname; ?></div><?php } ?>
		<?php if(isset($ok)){?><div class="alert alert-success">Пользователь обновлен</div><?php } ?>
		<input type = "text" name = "secret" style = "display:none" value="<?php echo $qid; ?>">
			<table>
				<tr>
					<td>Логин:</td>
					<td><input type="text" name="username" id = "login" value="<?php echo $username ?>" class = "input-xlarge"></td>
					<?php if(isset($empty_login)){ ?><td><div class="alert alert-error">Поле Логин должно быть заполнено</div></td><?php } ?>		
					<td><div id ="error" style="display:none" class="alert alert-error">Такой Логин уже занят</div></td>
				</tr>
			</table>
				<fieldset>
					<legend>Информация о матери</legend>
					<table>
						<tr>
							<td>ФИО:</td>
							<td><input type="text" name="mot_full_name" value="<?php echo $mot_full_name ?>" class = "input-xxlarge"></td>
							<?php if(isset($empty_mot_full_name)){ ?><td><div class="alert alert-error">Поле ФИО должно быть заполнено</div></td><?php } ?>
						</tr>
						<tr>
					<td>Дата рождения:</td>
					<td>
						<select name = "mot_year" id = "mot_year" class = "input-small">
							<option selected disabled value="default">Год</option>
							<?php foreach($years as $y){ ?>
								<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
							<?php } ?>
							<?php if($mot_year!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('mot_year');
								var r = '<?php echo $mot_year; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
						<select name = "mot_month" id = "mot_month" class = "input-small">
							<option selected disabled value="default">Месяц</option>
							<?php foreach($months as $m){ ?>
								<option value="<?php echo $m; ?>"><?php echo $m; ?></option>
							<?php } ?>
							<?php if($mot_month!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('mot_month');
								var r = '<?php echo $mot_month; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
						<select name = "mot_day" id = "mot_day" class = "input-small">
							<option selected disabled value="default">День</option>
							<?php foreach($days as $d){ ?>
								<option value="<?php echo $d; ?>"><?php echo $d; ?></option>
							<?php } ?>
							<?php if($mot_day!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('mot_day');
								var r = '<?php echo $mot_day; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
					</td>
					<?php if(isset($empty_mot_date_of_birth)){ ?><td><div class="alert alert-error">Поле Дата рождения должно быть заполнено</div></td><?php } ?>			
				</tr>
				<tr>
						<tr>
							<td>Адрес, телефон, эл.почта:</td>
							<td><textarea name="mot_address" class = "input-xxlarge" rows = "4"><?php echo $mot_address ?></textarea></td>	
							<?php if(isset($empty_mot_address)){ ?><td><div class="alert alert-error">Поле Адрес, телефон, эл.почта должно быть заполнено</div></td><?php } ?>
						</tr>
						<tr>
							<td>Место работы, должность:</td>
							<td><textarea name="mot_job" class = "input-xxlarge" rows = "4"><?php echo $mot_job ?></textarea></td>	
							<?php if(isset($empty_mot_job)){ ?><td><div class="alert alert-error">Поле Место работы, должность должно быть заполнено</div></td><?php } ?>
						</tr>		
					</table>
				</fieldset>
				<fieldset>
					<legend>Информация об отце</legend>
					<table>
						<tr>
							<td>ФИО:</td>
							<td><input type="text" name="fat_full_name" value="<?php echo $fat_full_name ?>" class = "input-xxlarge"></td>
							<?php if(isset($empty_fat_full_name)){ ?><td><div class="alert alert-error">Поле ФИО должно быть заполнено</div></td><?php } ?>
						</tr>
						<tr>
					<td>Дата рождения:</td>
					<td>
						<select name = "fat_year" id = "fat_year" class = "input-small">
							<option selected disabled value="default">Год</option>
							<?php foreach($years as $y){ ?>
								<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
							<?php } ?>
							<?php if($fat_year!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('fat_year');
								var r = '<?php echo $fat_year; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
						<select name = "fat_month" id = "fat_month" class = "input-small">
							<option selected disabled value="default">Месяц</option>
							<?php foreach($months as $m){ ?>
								<option value="<?php echo $m; ?>"><?php echo $m; ?></option>
							<?php } ?>
							<?php if($fat_month!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('fat_month');
								var r = '<?php echo $fat_month; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
						<select name = "fat_day" id = "fat_day" class = "input-small">
							<option selected disabled value="default">День</option>
							<?php foreach($days as $d){ ?>
								<option value="<?php echo $d; ?>"><?php echo $d; ?></option>
							<?php } ?>
							<?php if($fat_day!=""){ ?>
							<script type="text/javascript">
								var sel = document.getElementById('fat_day');
								var r = '<?php echo $fat_day; ?>';
								$(sel).val(r);
							</script>
						<?php } ?>
						</select>
					</td>
					<?php if(isset($empty_fat_date_of_birth)){ ?><td><div class="alert alert-error">Поле Дата рождения должно быть заполнено</div></td><?php } ?>			
				</tr>
				<tr>
						<tr>
							<td>Адрес, телефон, эл.почта:</td>
							<td><textarea name="fat_address" class = "input-xxlarge" rows = "4"><?php echo $fat_address ?></textarea></td>	
							<?php if(isset($empty_fat_address)){ ?><td><div class="alert alert-error">Поле Адрес, телефон, эл.почта должно быть заполнено</div></td><?php } ?>
						</tr>
						<tr>
							<td>Место работы, должность:</td>
							<td><textarea name="fat_job" class = "input-xxlarge" rows = "4"><?php echo $fat_job ?></textarea></td>	
							<?php if(isset($empty_fat_job)){ ?><td><div class="alert alert-error">Поле Место работы, должность должно быть заполнено</div></td><?php } ?>
						</tr>		
					</table>
				</fieldset>
				
			</table>
			<button type="submit" name="btnupdate" class = "btn btn-primary">Обновить</button>
		</fieldset>
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
					<div id = "secret"> Вы уверены, что хотите удалить пользователя </div>
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit">Да</button>  
			<a href="#" class="btn" data-dismiss="modal">Нет</a>  
		</div>  
	</div> 
</body>
