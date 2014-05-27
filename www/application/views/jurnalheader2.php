<head>
<script type = "text/javascript">
var last = null;
function a()
{
	if (last) {last.remove(); last = null;}
	var sel = $("#selclass").val();
	$.post("/ajax/select_subjects_by_class", {cl: sel}, function(data)
	{
		var new_data = $.parseJSON(data);
		var elem = $("#filters");
		var select = '<select id = "subjects" name = "subj" onchange = "b()">';
		select += "<option selected disabled>Выберите предмет</option>";
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
	var sel = $("#subjects").val();
	var sel2 = $("#selclass").val();
	$.post("/filljurnal/rdrct_view", {subject:sel, cl:sel2}, function(link){
		location.href = link;
	});

}

</script>
</head>
<body>
<form action="" method="post" class="form-horizontal">
	<div>
		<select name="classes" id="selclass" onchange = "a()">
			<option selected disabled value="default">Выберите класс</option>
			<?php foreach($classes as $class): ?>
				<option value="<?php echo $class; ?>"><?php echo $class; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div id = "filters"></div>	
</form>
</body>
