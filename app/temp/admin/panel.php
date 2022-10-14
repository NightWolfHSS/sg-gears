<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-panel | Админ панель</title>
	<link rel="stylesheet" href="<?php echo CSS_ADM ?>panel.css">
	<script defer type="text/javascript" src="<?php echo JS_ADM ?>script.js"></script>
</head>
<body>

	<div class="content">
		
		<div class="wp-popup">
			<div class="popup">
				<h3>Вы действительно хотите выйти?</h3>
				<div class="no">Нет</div>
				<div class="yes">Да</div>
			</div>			
		</div>


		<div class="panel">
			
			<!-- left-bar -->
			<div class="left-bar">
					
					<div class="box-center-one">
						
						<div class="list-box-show">
							<div class="sh">
								<a href="#"><img src="<?php echo LINK_ ?>free.png" alt="icon" title="главная"></a>
							</div>
						</div>

						<div class="list-box-show">
							<div class="sh">
								<a href="#"><img src="<?php echo LINK_ ?>info.png" alt="icon" title="о нас"></a>
							</div>
						</div>
						
						<div class="list-box-show">
							<div class="sh">
								<a href="#"><img src="<?php echo LINK_ ?>boxes.png" alt="icon" title="продукция"></a>
							</div>
						</div>
						
						<div class="list-box-show">
							<div class="sh">
								<a href="#"><img src="<?php echo LINK_ ?>gal.png" alt="icon" title="галлерея"></a>
							</div>
						</div>

						<div class="list-box-show">
							<div class="sh">
								<a href="#"><img src="<?php echo LINK_ ?>building.png" alt="icon" title="сервис" ></a>
							</div>
						</div>
					
					</div>

					<div class="line-fix"></div>

					<!-- <div class="box-center-two">themes</div> -->
			</div>
			<!-- end left-bar -->

			<!-- center-bar -->
			<div class="center-bar">

				<div class="head-center">
					<h1>админка - главная </h1>
					<form action="/action_page.php">
				      <input type="text" placeholder="поиск по админке" name="search">
				      <button type="submit"><i class="fa fa-search">найти</i></button>
				    </form>
				</div>

				<div class="litle-content">
					<div class="mob-tittle">
						<p>Tutorial | управление | использование </p>
						<p>Быстрый и удобный переход по сайту, это несколько способов управление сайтом
							пользуйтесь боковой панелью, 
							или переходите с главной.
						</p><hr>
						<p>Здесь можно удалять, изменять, редактировать данные</p>
					</div>
			
				</div>

				<div class="cl"></div>
				 <h2 class="p-left">навигация:</h2>

				<div class="wp-content mob-center">
					<a class="link-main active-c" href="">Главная </a>
					<a class="link-main" href="">о нас </a>
					<a class="link-main" href="">продукция </a>
					<a class="link-main" href="">галлерея </a>
					<a class="link-main" href="">сервис </a>
				</div>

			</div>
			<!-- end center-bar -->

			<!-- right-bar -->
			<div class="right-bar">

				<div class="rg-space-top">
					<div class="p-click">
						выход
					</div>
				</div>

				<div class="center-box-rb">
					<h3>Добро пожаловать!</h3>
					<p>Админка | управление сайтом | v1.1</p>
				</div>

				<div class="center-box-rb mob-box">
					<a href="">Перейти на сайт</a>
				</div>
				
				<div class="center-box-rb">
					<p>Это приложение можно расширять...</p>
				</div>

			</div>
			<!-- end right-bar -->

		</div>

	</div>
</body>
</html>