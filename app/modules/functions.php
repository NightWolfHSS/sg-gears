<?php 

	/**
	* psr-2
	* modules 
	* functions | scripts
	*/
	// vertificated
	// require 'app/temp/admin/temp/is_admin.php';	

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

	/*mini-gallery*/
	function get_mini_gallery()
	{
		include('app/temp/temp/mini-gallery.php');
	}

	/*slide*/
	function get_slide()
	{
		include('app/temp/temp/slide.php');
	}

	/*
	*=============
	* helpres
	* admin temps
	*=============
	*/

	/*left bar*/
	function get_left_bar()
	{
		include('app/temp/admin/temp/left-bar.php');
	}

	/*right bar*/
	function get_right_bar()
	{
		include('app/temp/admin/temp/right-bar.php');
	}

	/*navigation*/
	function get_navi()
	{
		include('app/temp/admin/temp/navi.php');
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