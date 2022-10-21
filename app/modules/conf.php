<?php 
/*
* connect modules | script | models 
*/

require 'app/modules/loadfile.php';
require 'app/models/gallery.php';


// каждый метод. каждый экшен
// экономия - модули не create_gallery detele_gallery update_gallery - 1 модуль и несколько методов 
// у тебя выход есть подключать всё сюда - но когда ты будешь записывать или 
// отображать данные - ты должнен будешь придумать какое то условие которое будет 
// вызывать только ту функцию которая должна в данный момент использоватся
// функции будут но только ты их сразу же не вызывай
// вызывай их при загрузке url теущего метода




/*run sql*/	
function get_tb()
{
	$path =  $_SERVER['REQUEST_URI'];

	if ($path == '/' || $path == '/home') {
		echo tests();
	}
	//
	if ($path == '/sweg') {
		echo getData();
	}

	if ($path == '/mirror') {
		echo insert_in_gallery();
	}

}





?>
