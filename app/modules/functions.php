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
	/*admin-connect JS|CSS|LIBS*/
	define('CSS_ADM', '/public/admin/');
	define('JS_ADM', '/public/admin/');
	define('LINK_', '/public/images-panel/');

	/*
	* =============
	* helpres
	* home temps
	* =============
	*/

	/*header*/
	function get_header()
	{
		include('app/temp/temp/header.php');
	}

	/*header-section*/
	function get_section_header()
	{
		include('app/temp/temp/section-header.php');
	}

	/*footer*/
	function get_footer()
	{
		include('app/temp/temp/footer.php');
	}

	/*
	*=============
	* helpres
	* admin temps
	*=============
	*/

	function get_admin_header()
	{
		return "stmt";
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