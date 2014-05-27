<?php if($article): ?>
    <div class="alert alert-info">
        <strong><?php echo $article->title; ?></strong><br /> 
        <i>Автор: <?php echo $username; ?></i> / 
        <i>Дата публикации: <?php echo $article->post_date; ?></i><br /><br />
        <p><?php echo $article->content_full; ?></p>
		<?php if(isset($show)){ ?>
			<a href="<?php echo URL::site('mynews/delete?id='.$article->news_id);?>">Удалить</a>
			<a href="<?php echo URL::site('mynews/update?id='.$article->news_id);?>">Исправить</a>
		<?php } ?>
    </div>    
<?php else: ?>
    <div class="alert alert-error">
		Статья не найдена или не существует
    </div>
<?php endif; ?>



