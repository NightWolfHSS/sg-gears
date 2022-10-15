<?php 
// сохранить данные соленые в базе данных - сделай запрос либо просто скопируй 
// данные уже в базу данных готовые

// получить данные нужно из бд - потому что секретно
$logname = htmlspecialchars($_POST['name']);
$logpass   = md5(htmlspecialchars($_POST['password'] . 'sweg'));

var_dump($logname);
var_dump($logpass);

if ($_POST['name']) {
	return ;// template 
} else {
	return ;// error temp - данные верны не верно
}


?>
