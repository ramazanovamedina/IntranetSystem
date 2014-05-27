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
	<?php if($article): ?>
		<div class="alert alert-info">
			<strong><h3><?php echo $article->title; ?></h3></strong>
			<i>Автор: <?php echo $username; ?></i> / 
			<i>Дата публикации: <?php echo $article->post_date; ?></i><br /><br />
			<p class="lead"><?php echo $article->content_full; ?></p>
			<?php if(isset($show)){ ?>
				<a href = "#" onclick = "del(<?php echo $article->news_id?>)">Удалить</a>
				<a href="<?php echo URL::site('mynews/update?id='.$article->news_id);?>">Исправить</a>
			<?php } ?>
		</div>    
	<?php else: ?>
		<div class="alert alert-error">
			Статья не найдена или не существует
		</div>
	<?php endif; ?>
	
	<div id="example" class="modal hide fade">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Удаление пользователя</h3>  
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
	</div>

</body>

