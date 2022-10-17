<?php 
// getData for Home page

function test_render_response_handler()
{
	http_response_code(404);
	header('Content-Type: application/json; charset=utf-8');
	header ('Status: 404 Not Found');
	echo "base";
}

// test_render_response_handler();


function get_files_test()
{	
	$error = $_FILES['image']['error'];
	$path_upload = 'app/upload';

	if($error == UPLOAD_ERR_OK) {

		if (is_uploaded_file($_FILES['image']['tmp_name'])) {
			echo "файл " . $_FILES['image']['name'] . " успешно загружен";
	 		$tmp_name = $_FILES['image']['tmp_name'];
			$name = basename($_FILES['image']['name']);
			move_uploaded_file($tmp_name, "$path_upload/$name");
		} else {
			return die();
		}
		//
	} else {
		// show popup is null file and redirect 
		echo "файла не было ";
	}
	echo "seccuess";
}

get_files_test();