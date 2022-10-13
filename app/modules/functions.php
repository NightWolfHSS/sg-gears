<?php 

	/**
	* psr-2
	* modules 
	* functions | scripts
	*/
	
	/*show errors*/
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	/*connect - JS|CSS|LIBS */
	define('CSS_PATH', '/public/css/');
	define('OWL_PATH', '/public/owl-carousel/');
	define('JS_PATH', '/public/js/');
	define('JS_OWL_PATH', '/public/owl-carousel/');

	/*
	* helpres
	* connect temp`s
	*/

	/*header*/
	function get_header()
	{
		include('app/temp/temp/header.php');
	}

	/*footer*/
	function get_footer()
	{
		include('app/temp/temp/footer.php');
	}


	/*get title */
	function get_title()
	{
		$path =  $_SERVER['REQUEST_URI'];

		if ($path == '/' || $path == '/home') {
			return "Домашняя страница";
		}
		//
		if ($path == '/sweg') {
			return "да свиг свиг";
		}



	}



 ?>