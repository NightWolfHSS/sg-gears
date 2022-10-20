<?php 
	if (isset($_SESSION['sxfd'])) {
		if ($_SESSION['sxfd'] == 'stmtfix') {
			header('Location: http://sg-gears:8080/adm-home');
			exit();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo "Вход в админку"; ?></title>
	<link rel="stylesheet" href="<?php echo CSS_ADM ?>log-in.css">
</head>
<body>
	<div class="wrapper">
		<div class="win-box">
			<div class="box-log-in">
				<p>авторизроватся войти | log in</p>	
				<div class="line"></div>
				<form action="/srtft" method="POST">
					<label>LOGIN | ЛОГИН</label>
					<input class="inp" name="name" type="text">
					<label>PASSWORD | ПАРОЛЬ</label>
					<input class="inp2" name="password" type="password">
					<button type="submit">Войти</button>
				</form>
			</div>
		</div> <!-- end win-box --> 
	</div> <!-- wrapper -->
</body>
</html>

