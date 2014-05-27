<head>
<script type = "text/javascript">
var last = null;
function a()
{
	if (last) {last.remove(); last = null;}
	var sel = $("#classes").val();
	$.post("/ajax/selectstudent", {cl: sel}, function(data)
	{
		console.log(data);
		var new_data = $.parseJSON(data);
		var elem = $("#filters");
		var select = '<select id = "students" name = "users" onchange="b()">';
		select += "<option selected disabled>Выберите ученика</option>";
		for (var i=0;i<new_data.length;i++){
			var value = new_data[i];
			select += "<option>";
			select += value;
			select += "</option>";			
		}
		select += "</select>";	
		elem.append(select);
		last = $("#filters :last-child");
	}
	);
}
function b()
{
	var sel = $("#students").val();
	$.post("/parentprof/rdrct_par_up", {name:sel}, function(link){
		location.href = link;
	});
}

	
</script>
</head>
	<form action="" method="post" class="form-horizontal">
	<div>
		<select name="classes" id="classes" onchange = "a()">
			<option selected disabled value="default">Выберите класс</option>
			<?php foreach($classes as $class): ?>
				<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div id = "filters"></div>	
	<div id ="name"></div>
	</form>
