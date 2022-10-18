<?php 

function get_user()
{
	$sql = "SELECT * FROM adm";
	$result  = get_connect()->query($sql);
	echo "<pre>";
	var_dump($result->fetch_assoc());
	echo "<pre>";
}
get_user();