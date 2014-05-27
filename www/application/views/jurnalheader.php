<head>
<script type = "text/javascript">

var last = null;
function a()
{
	if (last) {last.remove(); last = null;}
	var sel = $("#selsubj").val();
	$.post("/ajax/select_class", {subject: sel}, function(data)
	{
		var new_data = $.parseJSON(data);
		var elem = $("#filters");
		var select = '<select id = "classes" name = "classes" onchange = "b()">';
		select += "<option selected disabled>Выберите класс</option>";
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
	var sel = $("#classes").val();
	var sel2 = $("#selsubj").val();
	$.post("/filljurnal/rdrct_fill", {cl:sel, subject:sel2}, function(link){
		location.href = link;
	});

}

</script>
</head>
<body>
<form action="" method="post" class="form-horizontal">
	<div>
		<select name="subj" id="selsubj" onchange = "a()">
			<option selected disabled value="default">Выберите предмет</option>
			<?php foreach($subjects as $subject): ?>
				<option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div id = "filters"></div>	
</form>
</body>
