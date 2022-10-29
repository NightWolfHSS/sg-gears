<?php 
/*
*( v1/.1)
* load File
*/

function get_files_test()
{	
	$error = $_FILES['image']['error'];
	$path_upload = 'app/outtimefiles';

	if($error == UPLOAD_ERR_OK) {
		/*check is file was load*/
		if (is_uploaded_file($_FILES['image']['tmp_name'])) {
	 		$tmp_name = $_FILES['image']['tmp_name'];
			$name = basename($_FILES['image']['name']);

			if ($_FILES['image']['size'] > '1572864') {
				echo "формат изображения превышает!";
				die();
			} else {
				$move = move_uploaded_file($tmp_name, "$path_upload/$name"); 
				return $stmt;
			}
		} else {
			return die();
		}

	} else {
		// show popup is null file and redirect 
		echo "файла не было";
	}
}

