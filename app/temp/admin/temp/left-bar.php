<?php 
	if (!isset($_SESSION['sxfd'])) {
		header('Location: http://sg-gears:8080/hole');
		exit();
	}
?>
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
								<a href="/adm-home"><img src="<?php echo LINK_ ?>free.png" alt="icon" title="главная"></a>
							</div>
						</div>

						<div class="list-box-show">
							<div class="sh">
								<a href="/adm-contact"><img src="<?php echo LINK_ ?>info.png" alt="icon" title="о нас"></a>
							</div>
						</div>
						
						<div class="list-box-show">
							<div class="sh">
								<a href="/adm-product"><img src="<?php echo LINK_ ?>boxes.png" alt="icon" title="продукция"></a>
							</div>
						</div>
						
						<div class="list-box-show">
							<div class="sh">
								<a href="/adm-gallery"><img src="<?php echo LINK_ ?>gal.png" alt="icon" title="галлерея"></a>
							</div>
						</div>

						<div class="list-box-show">
							<div class="sh">
								<a href="/adm-service"><img src="<?php echo LINK_ ?>building.png" alt="icon" title="сервис" ></a>
							</div>
						</div>
					
					</div>

					<div class="line-fix"></div>

					<!-- <div class="box-center-two">themes</div> -->
			</div>
			<!-- end left-bar -->
