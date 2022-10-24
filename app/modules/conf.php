<?php 
/*
* connect modules | script | models 

*/

require 'app/modules/loadfile.php';
require 'app/models/gallery.php';

/*run sql*/	
function get_tb()
{
	$path =  $_SERVER['REQUEST_URI'];
	// get param
	$str = explode("/", $path);

	if ($path == '/' || $path == '/home') {
		echo tests();
	}


	/*insert methode*/

	if ($path == '/add_gallery') {
		insert_in_gallery();
	}
	if ($path == '/rename_gallery') {
		// insert_in_gallery();
	}
	/*
	* delete methode
	*/
	if ($path == '/delete_gallery/'.$str[2]) {
		// migrate model metthod
		delete_gallery($str[2]);
	}

}





?>
