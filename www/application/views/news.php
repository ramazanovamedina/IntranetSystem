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
	<?php $i=0; ?>

	<?php if(sizeof($articles)!=0){ ?>
		<?php foreach($articles as $article): ?>
		 
			<div class="alert alert-info">
				<?php if(isset($show)){?>
					<p style="text-align:right; text-decoration:underline;">
						<a href = "#" onclick = "del(<?php echo $article->news_id?>)">Удалить</a>
						<a href="<?php echo URL::site('mynews/update?id='.$article->news_id); ?>">Исправить</a>
					</p>
				<?php }?>
				<strong><h3><?php echo $article->title; ?></h3></strong>
				<i>Автор: <?php echo $username[$i]; $i++;?></i> / 
				<i>Дата публикации: <?php echo $article->post_date; ?></i>
				<p class = "lead"><?php echo $article->content_short; ?></p>
				<p>
					<a href="<?php echo URL::site('news/articles/'. $article->news_id); ?>"><h5 style="text-align:right; text-decoration:underline;">Подробнее</h5></a>
				</p>
			</div>
		 
		<?php endforeach; ?>

	<?php } else { ?>
		<div class="alert alert-info">
			Новостей нет
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
	</div> 
</body>