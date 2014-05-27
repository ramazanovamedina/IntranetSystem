<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>МШ</title>
		<link href="/public/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<script src="/public/js/bootstrap.min.js"></script>
		<script src = "/public/js/jquery-1.7.1.js"></script>
		<script src = "/public/js/bootstrap-dropdown.js"></script>
		<script src = "/public/js/bootstrap-alert.js"></script>
		<style type="text/css">   
			.navbar-inner {
				background-color: red;
				background-image: linear-gradient(to bottom, blue, green);
				background-repeat: repeat-x;
				border: 1px solid yellow;
				border-radius: 4px 4px 4px 4px;
				box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
				min-height: 40px;
				padding-left: 20px;
				padding-right: 20px;
			}

			.dropdown-menu {
				background-clip: padding-box;
				background-color: green;
				border: 1px solid rgba(0, 0, 0, 0.2);
				border-radius: 6px 6px 6px 6px;
				box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
				display: none;
				float: left;
				left: 0;
				list-style: none outside none;
				margin: 2px 0 0;
				min-width: 160px;
				padding: 5px 0;
				position: absolute;
				top: 100%;
				z-index: 1000;
			}

			.btn-group.open .btn.dropdown-toggle {
			  background-color: red;
			}

			.btn-group.open .btn.dropdown-toggle {
			  background-color:lime;
			}

			.navbar .nav li.dropdown.open > .dropdown-toggle,
			.navbar .nav li.dropdown.active > .dropdown-toggle,
			.navbar .nav li.dropdown.open.active > .dropdown-toggle {
			  color:white;
			  background-color:Teal;
			}

			.navbar .nav > li > a {
				color: white;
				float: none;
				padding: 10px 15px;
				text-decoration: none;
				text-shadow: 0 0px 0 #ffffff;
			}

			.navbar .brand {
			  display: block;
			  float: left;
			  padding: 10px 20px 10px;
			  margin-left: -20px;
			  font-size: 20px;
			  font-weight: 200;
			  color: white;
			  text-shadow: 0 0px 0 #ffffff;
			}

			.navbar .nav > li > a:focus,
			.navbar .nav > li > a:hover {
			  color: white;
			  text-decoration: none;
			  background-color: transparent;
			}

			.navbar-text {
			  margin-bottom: 0;
			  line-height: 40px;
			  color: white;
			}

			.dropdown-menu li > a {
			  display: block;
			  padding: 3px 20px;
			  clear: both;
			  font-weight: normal;
			  line-height: 20px;
			  color: white;
			  white-space: nowrap;
			}

			.navbar-link {
			  color: white;
			}

			.navbar-link:hover {
			  color: white;
			}

</style>
		
	</head>
 
	<body>

		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li><a href="<?php echo URL::site(''); ?>">Главная</a></li>
					
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">О школе<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::site('main/history')?>">История школы</a></li>
							<li><a href="<?php echo URL::site('main/mission')?>">Миссия и философия</a></li>
							<li><a href="<?php echo URL::site('main/future')?>">Наша будущая школа</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Правила приема<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::site('main/admission')?>">Помощь поступающим</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Гордость школы<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo URL::site('main/best_students')?>">Лучшие ученики</a></li>
							<li><a href="<?php echo URL::site('main/best_teachers')?>">Лучшие учителя</a></li>
						</ul>
					</li>
					
					<li><a href="<?php echo URL::site('news'); ?>">Новости</a></li>
					
					<li><a href="<?php echo URL::site('main/contacts'); ?>">Контакты</a></li>
					
					<li><a href="<?php echo URL::site('auth'); ?>">Войти</a></li>
				</ul>
			</div>
		</div>
		<div class = "container">	
			<img src = "/public/images/logo.png">
			<br><br>
			<div class="content"><?php echo $content; ?></div> 
		</div>
		
	</body>

</html>