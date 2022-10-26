<?php 
/*
* connect modules | script | models 
*/

define('IMG_PATH', 'app/upload/');

require 'app/modules/removeFile.php';
require 'app/modules/loadfile.php';
require 'app/models/gallery.php';
require 'app/models/mini_g.php';

/*run sql*/	
function get_tb()
{
	$path =  $_SERVER['REQUEST_URI'];
	// get param
	$str = explode("/", $path);

	if ($path == '/' || $path == '/home') {
		echo tests();
	}


	/*
	* insert methodes
	*/

	if ($path == '/add_gallery') {
		insert_in_gallery();
	}
	
	if ($path == '/add_mini_g') {
		insert_mini_g();
	}


	/*
	* delete methods
	*/
	if ($path == '/delete_gallery/'.$str[2]) {
		delete_gallery($str[2]);
	}
	if ($path == '/delete_mini/'.$str[2]) {
		delete_mini_g($str[2]);
	}

	/*
	* rename methods
	*/

	// if ($path == '/rename_gallery') {
	// 	// insert_in_gallery();
	// }


}





?>
