<head>
<link rel="stylesheet" type="text/css" href="../public/css/datepicker.css" /> 
<script type="text/javascript" src="../public/js/datepicker.js"></script>
</head>
<form action="" method="post" class="form-horizontal">
	<div align = "center">
		<button type = "submit" class = "btn btn-info" name = "prev"><i class="icon-arrow-left"></i></button>
		<input type = "text" readonly name = "mon" value = "<?php echo $week_days[1] ?>" class = "input-small"> -
		<input type = "text" readonly name = "sat" value = "<?php echo $week_days[6] ?>" class = "input-small"> 
		<button type = "submit" class = "btn btn-info" name = "next"><i class="icon-arrow-right"></i></button>
		<br><br>
		<input type = "text" name = "cal" id="start_dt" class="datepicker"  = 7>
		<button type = "submit" name = "btn" class = "btn btn-info"><i class="icon-ok"></i></button>
	</div>

</form>
