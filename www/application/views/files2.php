<head>
</head>
<form action="" method="post" class="form-horizontal">
	<fieldset>
		<legend>Файлы учителя</legend>
		<ul class="breadcrumb">
			  <li><a href="#"><?php echo $teacher_name ?></a></li>
			</ul>
		<?php if(sizeof($files)!=0) {?>
			<table class="table table-bordered">
				<tr style = "background-color:#33CCCC">
					<th width = "60">Файл</th>
					<th></th>
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
										<a href="<?php echo URL::site('files/view?dir='.$file[2].'&status=false');?>">
								<?php } ?>
						<?php echo $file[1]?></td>
					</tr>
				<?php } ?>
			</table>
		<?php } else {?>
			<div class="alert alert-info">
				Файлов нет
			</div>
		<?php } ?>
	</fieldset>
</form>