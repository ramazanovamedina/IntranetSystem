<head>
	<script src = "/public/js/bootstrap-modal.js"></script>
	<script type = "text/javascript">
		function del(data)
		{
			$("#secret").val(data);
			$("#example").modal("show");
		}
		$(function() {
			$("button#submit").click(function(){
				var data = $("#secret").val();
				$("#example").modal('hide');
				location.href = "/mynews/delete?id="+data;
			});
		});
	</script>
</head>
<body>
	<?php if(sizeof($mynews)!=0){ ?>
		<table class="table table-bordered">
			<tr>
				<td width=150px><b>Заголовок</b></td>
				<td><b>Краткое содержание</b></td>
				<td width=150px><b>Дата публикации</b></td>
				<td width=100px><b>Удалить</b></td>
				<td width=100px><b>Исправить</b></td>
			</tr>
			<?php foreach($mynews as $mynew):?>
				<tr>
					<td><?php echo $mynew->title; ?></td>
					<td><a href="<?php echo URL::site('mynews/details/'.$mynew->news_id); ?>"><?php echo $mynew->content_short; ?></a></td>
					<td><?php echo $mynew->post_date; ?></td>
					<td><a href = "#" onclick = "del(<?php echo $mynew->news_id?>)">Удалить</a></td>
					<td><a href="<?php echo URL::site('mynews/update?id='.$mynew->news_id);?>">Исправить</a></td>
				</tr>		
			<?php endforeach; ?>	
		</table>
	<?php }else{ ?>
		<div class="alert alert-info">
			У Вас нет опубликованных Вами новостей
		</div>
	<?php } ?>
	
	<div id="example" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Удаление новости</h3>  
		</div> 
		<div>
			<form class="contact">
				<div class="modal-body">  
					<input type = "text" id = "secret" style = "display:none">
					<div> Вы уверены, что хотите удалить новость? </div>
				</div>  
			</form>
		</div>
		<div class="modal-footer">  
			<button class="btn btn-primary" id="submit">Да</button>  
			<a href="#" class="btn" data-dismiss="modal">Нет</a>  
		</div>  
`	</div> 
</div> 
	
	
</body>
