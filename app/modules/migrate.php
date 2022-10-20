<?php 
/*
* migrations
* конечно можно сделать универсальную функцию которая бы принимала sql на вход
* но тогда мы не сможем контролировать наши миграции для 
* расширения | редактирование | и т.д.
* поэтому DRY нарушен
*/



function make_migrations_all()
{
	$sql = "CREATE TABLE persons(
	    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	    first_name VARCHAR(30) NOT NULL,
	    last_name VARCHAR(30) NOT NULL,
	    email VARCHAR(70) NOT NULL UNIQUE
	)";
}

/*
* create db
* @dbname | value
* return void
*/
function create_db()
{
	$conn = get_connect();
	$sql = "CREATE DATABASE dbname";
	// create db
	if ($conn->query($sql) === TRUE) {
		echo "База данных создана";
	} else {
		echo "База данных не была создана - ошибка";
	}
	// close connect
	$conn->close();
}
// create_db
/*
* create table
*/
function create_admin_table()
{
	$sql = "CREATE TABLE noname (
		login VARCHAR(70) NOT NULL,
		password VARCHAR(200) NOT NULL
	)";

	$conn = get_connect();
	if ($conn->query($sql) === TRUE) {
		echo "таблица создана";
	} else {
		echo "таблица не создана";
	}

	$conn->close();
}
// create_admin_table


/*
* save in db user admin
*/

function create_admin_user()
{

	$md5ch = md5("qwqwdqwdwqd");
	$sql = "INSERT INTO adm (login, password)
			VALUES('asddsasdasd', '$md5ch');";
	$conn = get_connect();
	if ($conn->query($sql) === TRUE) {
		echo "данные успешно сохранены";
	} else {
		echo "данные не были сохранены";
	}
	$conn->close();
}
// create_admin_user();

?>