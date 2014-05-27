<head>
<script src = "/public/js/bootstrap-modal.js"></script>
<script type = "text/javascript">
function deleteinfo(i,j)
{
	i.value = "";
	j.value = "";
}
function showwin(data, order, day) {
	var d;
	if(day == 0)
		d = "Понедельник";
	else if (day == 1)
		d = "Вторник";
	else if (day == 2)
		d = "Среда";
	else if (day == 3)
		d = "Четверг";
	else if (day == 4)
		d = "Пятница";
	else if (day == 5)
		d = "Суббота";
	$("#day").val(d+" / "+"Урок "+order);
	$("#secret").val(data);
	$('#subjects').val('default');
	element = document.getElementById("teachers");
	element.parentNode.removeChild(element);
}
var last = false;
function ch()
{
	if (last) {
	var el = document.getElementById('filters');
			while(el.hasChildNodes()){
				el.removeChild(el.lastChild);
			}
	last = false;
	}
	var sel = $("#subjects").val();
	$.post("/ajax/select_teacher", {subject: sel}, function(data)
	{
		var new_data = $.parseJSON(data);
		var elem = $("#filters");
		var select = '<select id = "teachers" name = "teachers">';
		select += "<option selected disabled value='default'>Выберите учителя</option>";
		for (var i=0;i<new_data.length;i++){
			var value = new_data[i];
			select += "<option>";
			select += value;
			select += "</option>";			
		}
		select += "</select>";
		elem.append(select);
		last = true;
	}
	);
}
$(function() {
	$("button#submit").click(function(){
		var sub = document.form.subjects.value;
		var tea = document.form.teachers.value;
		var secret = document.form.secret.value;
		document.getElementById("sub"+secret).value = sub;
		document.getElementById("teach"+secret).value = tea;
		$("#example").modal('hide');
		
	});
});

</script>		
</head>
<body>
<form action="" method="post" class="form-horizontal">
<input type = "text" name = "secret" style = "display:none" value = "<?php echo $cl; ?>">

<?php $b = array(array("Monday1", "Tuesday1", "Wednesday1", "Thursday1", "Friday1", "Saturday1"),
				array("Monday2", "Tuesday2", "Wednesday2", "Thursday2", "Friday2", "Saturday2"),
				array("Monday3", "Tuesday3", "Wednesday3", "Thursday3", "Friday3", "Saturday3"),
				array("Monday4", "Tuesday4", "Wednesday4", "Thursday4", "Friday4", "Saturday4"),
				array("Monday5", "Tuesday5", "Wednesday5", "Thursday5", "Friday5", "Saturday5"),
				array("Monday6", "Tuesday6", "Wednesday6", "Thursday6", "Friday6", "Saturday6"),
				array("Monday7", "Tuesday7", "Wednesday7", "Thursday7", "Friday7", "Saturday7")); ?>
				
<?php $a = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); ?>
	<fieldset>
		<legend>Составление/Обновление расписания</legend>
		<?php if(isset($ok)){?><div class="alert alert-success">Сохранено</div><?php } ?>
		<table class="table table-bordered">
			<tr style = "background-color:#33CCCC">
				<th>Понедельник</th>
				<th>Вторник</th>
				<th>Среда</th>
				<th>Четверг</th>
				<th>Пятница</th>
				<th>Суббота</th>
			</tr>	
			<?php for($i = 0; $i < 7; $i++){ ?>
				<tr>
					<?php for($j = 0; $j <6; $j++){ ?>
						<td>
							<a data-toggle="modal" href="#example" onclick = "showwin('<?php echo $b[$i][$j] ?>', '<?php echo $i+1 ?>', '<?php echo $j ?>')">Урок <?php echo $i+1; ?></a>
							<a href="#" onclick="deleteinfo(<?php echo "sub".$b[$i][$j] ?>, <?php echo "teach".$b[$i][$j] ?>);return false;"><i class = "icon-remove pull-right" style = "color:blue"></i></a>
							<br><input type = "text" readonly id = "sub<?php echo $b[$i][$j];?>" name = "sub<?php echo $b[$i][$j];?>" value = "<?php echo $array[$a[$j]][$i+1][0]?>" class = "input-large">
							<br><input type = "text" readonly id = "teach<?php echo $b[$i][$j];?>" name = "teach<?php echo $b[$i][$j];?>" value = "<?php echo $array[$a[$j]][$i+1][1]?>" class = "input-large">
						</td>
				<?php }?>
				</tr>
			<?php } ?>
			
		</table>
	</fieldset>	
		<button type="submit" name="btnsubmit" class = "btn btn-primary">Сохранить</button>
</form>

	<div id="example" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Выберите учителя и предмет</h3>  
			<br>
			<input type = "text" id = "day" readonly style = "background:pink">
		</div> 
		<div>
			<form class="contact" name = "form">
				<div class="modal-body">  
					<input type = "text" id = "secret" style = "display:none"> 
					<select name="subjects" id="subjects" onchange="ch()">
						<option selected disabled value="default">Выберите предмет</option>
							<?php foreach($subjects as $subject): ?>
								<option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
							<?php endforeach; ?>
					</select>
					<div id = "filters"></div>	
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit">Сохранить</button>  
			<a href="#" class="btn" data-dismiss="modal">Закрыть</a>  
		</div>  
	</div>  
</body>

