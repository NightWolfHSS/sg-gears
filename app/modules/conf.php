<?php 
/*
* connect modules | script | models 
*/

define('IMG_PATH', 'app/upload/');

require 'app/modules/removeFile.php';
require 'app/modules/loadFile.php';
require 'app/models/gallery.php';
require 'app/models/mini_g.php';
require 'app/models/slider.php';
require 'app/models/tip.php';




/*
* exec methods sql 
* title for header`s
* seo decription
*/	
function get_tb()
{
	$path =  $_SERVER['REQUEST_URI'];
	// get param
	$str = explode('/', $path);



	/*
	* insert methodes
	*/
	if ($path == '/add_gallery') {
		insert_in_gallery();
	}
	if ($path == '/add_mini_g') {
		insert_mini_g();
	}
	if ($path == '/add_slide') {
		insert_in_slider();
	}
	if ($path == '/add_tips') {
		insert_in_tip();
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
	if ($path == '/delete_slide/'.$str[2]) {
		delete_slide($str[2]);
	}
	if ($path == '/delete_tips/'.$str[2]) {
		delete_tip($str[2]);
	}

	/*
	* rename methods
	*/

}



?>
