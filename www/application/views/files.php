<head>
	<script src = "/public/js/bootstrap-modal.js"></script>
	<script type = "text/javascript">
		function showfileeditwin(dir, name, ext) {
			$("#dir").val(dir);
			$("#rename").val(name);
			$('#ext').val(ext);
			var direct = '<?php echo substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "dir=")+4);?>';
			$("#secret").val(direct);
		}
		function showfoleditwin(dir, name) {
			$("#dir").val(dir);
			$("#rename").val(name);
			var direct = '<?php echo substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "dir=")+4);?>';
			$("#secret").val(direct);
		}
		$(function() {
			$("button#submit").click(function(){
				var dir = $("#dir").val();
				var ext = $("#ext").val();
				var name = $("#rename").val();
				var direct = $("#secret").val();
				if(ext!=""){
					$.ajax({
						type: "POST",
						url: "/ajax/rename_file",
						data: {dir:dir, name:name, ext:ext, direct:direct},
						dataType: "json",
						success: function(msg){
							if(msg == "true"){
								$("#example").modal('hide');		
								location.reload();	
							}
							else {
								$("#status").css('display', 'inline');
							}
						}
					});
					return false;
				}
				else
				{
					$.ajax({
						type: "POST",
						url: "/ajax/rename_dir",
						data: {dir:dir, name:name,direct:direct},
						dataType: "json",
						success: function(msg){
							if(msg == "true"){
								$("#example").modal('hide');		
								location.reload();	
							}
							else {
								$("#status").css('display', 'inline');
							}
						}
					});
					return false;
					
				}
			});
		});
		function delfile(data)
		{
			$("#secret4").val(data);
			$("#example4").modal("show");
		}
		$(function() {
			$("button#submit4").click(function(){
				var data = $("#secret4").val();
				$.ajax({
					type: "POST",
					url: "/ajax/delete_file",
					data: {dir:data},
					dataType: "json",
					success: function(msg){
						$("#example4").modal('hide');		
						location.reload();
					}
				});
				return false;
			});
		});
		function deldir(data)
		{
			$("#secret5").val(data);
			$("#example5").modal("show");
		}
		$(function() {
			$("button#submit5").click(function(){
				var data = $("#secret5").val();
				$.ajax({
					type: "POST",
					url: "/ajax/delete_dir",
					data: {dir:data},
					dataType: "json",
					success: function(msg){
						$("#example5").modal('hide');		
						location.reload();
					}
				});
				return false;
			});
		});

	</script>
</head>
<body>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
			<legend>Мои файлы</legend>
			<?php if(sizeof($files)!=0) {?>
				<table class="table table-bordered">
					<tr style = "background-color:#33CCCC">
						<th width = "40">Файл</th>
						<th width = "500"></th>
						<th width = "40">Переименовать</th>
						<th width = "40">Удалить</th>
					</tr>
					<?php foreach($files as $file){?>
						<tr>
						<td><?php if($file[0]==""){?><img src = "/public/images/folder-icon.jpg"></img><?php } else {?>
							<img src = "<?php echo '/public/images/32px/'.$file[0].'.png'?>"></img><?php } ?>
						</td>
						<td><?php if($file[0]!=""){?> 
										<a href="<?php echo URL::site('files/download?name='.$file[2]);?>">
								<?php }
								else{ ?>
										<a href="<?php echo URL::site('files/view?dir='.$file[2]);?>">
								<?php } ?>
						<?php echo $file[1]?></td>
						<td>
						<?php if($file[0]!=""){?> 
										<a data-toggle="modal" href="#example" onclick = "showfileeditwin('<?php echo $file[2] ?>', '<?php echo $file[1] ?>', '<?php echo $file[0] ?>')">
								<?php }
								else{ ?>
										<a data-toggle="modal" href="#example" onclick = "showfoleditwin('<?php echo $file[2] ?>', '<?php echo $file[1] ?>')">
								<?php } ?>
							<i class = "icon-edit2 icon-large"></i></a></td>
						<td><?php if($file[0]!=""){?> 
										<a href = "#" onclick = "delfile('<?php echo $file[2]?>')">
										<?php } 
								else { ?>
										<a href = "#" onclick = "deldir('<?php echo $file[2]?>')">
								<?php } ?>
								<i class = "icon-trash2 icon-large"></i></a></td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<div class="alert alert-info">
					Файлов нет
				</div>
			<?php } ?>
		</fieldset>
	</form>
	
	
	
	<div id="example" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Переименуйте файл/папку</h3>  
		</div> 
		<div>
			<form class="contact" name = "form">
				<div class="modal-body">  
					<input type = "text" id = "secret" style = "display:none"> 
					<input type = "text" id = "dir" style = "display:none"> 
					<input type = "text" id = "ext" style = "display:none"> 
					<div id = "status" style = "display:none; color:red;">Название не заполнено</div> 
					<br>
					<label>Новое имя:</label>
					<input type = "text" id = "rename" class = "input-xlarge">
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit">Сохранить</button>  
			<a href="#" class="btn" data-dismiss="modal">Закрыть</a>  
		</div>  
	</div>  
	
	<div id="example4" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Удаление файла</h3>  
		</div> 
		<div>
			<form class="contact">
				<div class="modal-body">  
					<input type = "text" id = "secret4" style = "display:none"> 
					<div> Вы уверены, что хотите удалить файл? </div>
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit4">Да</button>  
			<a href="#" class="btn" data-dismiss="modal">Нет</a>  
		</div>  
	</div> 
		
	<div id="example5" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Удаление папки</h3>  
		</div> 
		<div>
			<form class="contact">
				<div class="modal-body">  
					<input type = "text" id = "secret5" style = "display:none"> 
					<div> Вы уверены, что хотите удалить папку и все ее содержимое? </div>
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit5">Да</button>  
			<a href="#" class="btn" data-dismiss="modal">Нет</a>  
		</div>  
	</div> 
	
	
	
</body>	