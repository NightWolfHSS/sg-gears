<?php 

	/*
	* table gallery
	* connect in file config | get_connect method to connect db
	*/

	function setData()
	{
		// set data
		// fiels
	}

	function getData()
	{
		$data = "какие то данные и ты их получил";
		return $data;
	}


	function tests()
	{
		// опять таки надо попробувать $sql 
		// и принимать потом такой запрос но врятли поля разные

		// loafile Тоже тут попробувать надо 
		// если ты получаешь тут данные - то 
		// сможешь их и сохранить в бд 
		get_files_test();
		echo "<br>";
		var_dump($_POST['description']);
	}


?>