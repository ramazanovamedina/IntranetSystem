<?php $i=0; ?>

<?php if(sizeof($news)!=0){ ?>
	<?php foreach($news as $n): ?>
		<?php foreach($n as $new):?>
		<div class="alert alert-info">			
			<strong><?php echo $new->title; ?></strong><br />
			<i>Автор: <?php echo ORM::factory('us')->getFullNameById($new->author_id); $i++;?></i> / 
			<i>Дата публикации: <?php echo $new->post_date; ?></i><br /><br />
			<p><?php echo $new->content_short; ?></p>
			<p style="text-align:right; text-decoration:underline;">
				<a href="<?php echo URL::site('intranetnews/details/'. $new->news_id); ?>">Подробнее</a>
			</p>
		</div>
	<?php endforeach; ?>
	<?php endforeach; ?>

<?php } else { ?>
	<div class="alert alert-info">
			Новостей нет
		</div>
<?php } ?>