<?php 
/*
* migrations
*/

function on_ready($sql)
{
	// Sorry no time for explanations
	if (get_connect()->query($sql)) {
		echo "Создано!";
	} else {
		echo "Ошибка";
	}
	get_connect()->close();
}


/*
* create db
* @dbname | value
* return void
*/
function create_db()
{
	$sql = "CREATE DATABASE GASDASD";
	on_ready($sql);
}


/*
* create table
*/
function create_admin_table()
{
	$sql = "CREATE TABLE noname (
		login VARCHAR(70) NOT NULL,
		password VARCHAR(200) NOT NULL
	);";
	on_ready($sql);
}


/*
* save in db user admin
*/
function create_admin_user()
{

	$md5ch = md5("qwqwdqwdwqd");
	$sql = "INSERT INTO adm (login, password)
			VALUES('asddsasdasd', '$md5ch');";
	on_ready($sql);
}

function create_table_gallery()
{
	$sql = "
		CREATE TABLE sad (
			id int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
			description VARCHAR(255) NULL,
			url VARCHAR(255) NOT NULL
		);";
	on_ready($sql); 
}


function rename_table()
{
	$sql = "RENAME TABLE say TO sayz";
	on_ready($sql);
}
// rename_table();

// create_table_gallery();

?>