<head>
	<script src = "/public/js/bootstrap-modal.js"></script>
	<script type = "text/javascript">
		function showcrfolwin() {
			var direct = '<?php echo substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "dir=")+4);?>';
			$("#secret2").val(direct);
		}
		
		$(function() {
			$("button#submit2").click(function(){
				var direct = $("#secret2").val();
				var name = $("#name").val();
				$.ajax({
					type: "POST",
					url: "/ajax/create_dir",
					data: {direct:direct, name:name},
					dataType: "json",
					success: function(msg){
						$("#example2").modal('hide');		
						location.reload();
					}
				});
				return false;	
			});
		});
		
	</script>

</script>
</head>
<body>
	<a href="#" onclick='window.open("<?php echo URL::site('/files/upload_file/'); ?>", "win", "toolbar=0,width=600,height=400")'; return false;><span class="label label-info">Загрузить файл</span></a>
	<a data-toggle="modal" href="#example2" onclick = "showcrfolwin()"><span class="label label-info">Создать папку</span></a>
	
	<div id="example2" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Создайте папку</h3>  
		</div> 
		<div>
			<form class="contact" name = "form">
				<div class="modal-body">  
					<input type = "text" id = "secret2" style = "display:none"> 
					<br>
					<label>Имя:</label>
					<input type = "text" id = "name" class = "input-xlarge">
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit2">Сохранить</button>  
			<a href="#" class="btn" data-dismiss="modal">Закрыть</a>  
		</div>  
	</div>
	
	
	
</body>