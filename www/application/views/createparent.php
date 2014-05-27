<head>
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
	
	var last = null;
	function chcl()
	{
		if (last) {last.remove(); last = null;}
		var sel = $("#classes").val();
		$.post("/ajax/selectstudent", {cl: sel}, function(data)
		{
			var new_data = $.parseJSON(data);
			var elem = $("#stud");
			var select = '<select name = "chil" id = "chil" onchange="b()">';
			select += "<option selected disabled>Выберите ученика</option>";
			for (var i=0;i<new_data.length;i++)
			{
				var value = new_data[i];
				select += "<option>";
				select += value;
				select += "</option>";			
			}
			select += "</select>";	
			elem.append(select);
			last = $("#stud :last-child");
		}
		);
	}
	var last2 = null;
	function b()
	{
		if (last2) {last2.remove(); last2 = null;}
		var child = $("#chil").val();
	//	$.post("/ajax/getUserFullName", {name: child}, function(data)
	//	{
	//		var child_name = $.parseJSON(data);
			var elem = $("#ch");
			var select = '<p style = "color:green"> Ученик ';
			select += child;
			select += "</p>";
			elem.append(select);
	//	}
	//	);
		$.post("/ajax/getUserIdByFullName", {name: child}, function(data)
		{
			var new_data = $.parseJSON(data);
			var inp = document.getElementById("userid");
			inp.value = new_data;
		}
		);
		var div = document.getElementById("ch");
		last2 = div.lastChild;
	}
</script>		
</head>
<form action="" method="post" class="form-horizontal">
	<fieldset>
    <legend>Регистрация пользователя - родитель</legend>
	<?php if(isset($ok)){?><div class="alert alert-success">Пользователь зарегистрирован</div><?php } ?>
		<table>
			<tr>
				<td>Класс:</td>
				<td><select name="classes" id="classes" onchange="chcl()" class = "input-medium">
						<option selected disabled value="default">Выберите класс</option>
						<?php foreach($classes as $class): ?>
							<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
						<?php endforeach; ?>
						<?php if($child_class!=""){ ?>
							<script type = "text/javascript">
								var cont = '<?php echo $child_class; ?>';
								$("#classes").val(cont);
							</script>
						<?php } ?>
					</select>
				</td>
				<td><div id = "stud"></div></td>
				<td><div id = "ch"></div></td>
				<td><input type="text" name="userid" id="userid" style = "display:none"></td>
				<?php if(isset($empty_child_name)){ ?><td><div class="alert alert-error">Выберете ребенка</div></td><?php } ?>
			</tr>	
		</table>
		<table>
			<tr>
				<td>Логин:</td>
				<td><input type="text" name="username" id = "login" placeholder="Логин" value="<?php echo $username ?>" class = "input-xlarge"></td>
				<?php if(isset($empty_login)){ ?><td><div class="alert alert-error">Поле Логин должно быть заполнено</div></td><?php } ?>		
				<td><div id ="error" style="display:none" class="alert alert-error">Такой Логин уже занят</div></td>
			</tr>
		</table>
			<fieldset>
				<legend>Информация о матери</legend>
				<table>
					<tr>
						<td>ФИО:</td>
						<td><input type="text" name="mot_full_name" placeholder="ФИО" value="<?php echo $mot_full_name ?>" class = "input-xxlarge"></td>
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
						<td><input type="text" name="fat_full_name" placeholder="ФИО" value="<?php echo $fat_full_name ?>" class = "input-xxlarge"></td>
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
	</fieldset>
		<button type="submit" class = "btn btn-primary" name="btnsubmit">Зарегистрировать</button>

</form>
