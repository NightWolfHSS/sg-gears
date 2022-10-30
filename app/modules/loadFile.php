<?php 
/*
*( v1/.1)
* load File
*/


/*
* return val | name
*/
function get_file()
{	
	$error = $_FILES['image']['error'];
	$path_upload = 'app/upload/';

	if($error == UPLOAD_ERR_OK) {
		/*check is file was load*/
		if (is_uploaded_file($_FILES['image']['tmp_name'])) {
	 		$tmp_name = $_FILES['image']['tmp_name'];
			$name = basename($_FILES['image']['name']);

			if ($_FILES['image']['size'] > '1572864') {
				echo "нужно оптимизировать изображение - вес не более 1.5мб!";
				die();
			} else {

				$fileInfo = pathinfo($_FILES['image']['name']);
				$renderName = uniqid() . '.' . $fileInfo['extension'];
				// check
				if (!file_exists($path_upload."635d6b989b251.jpg")) {
					move_uploaded_file($_FILES['image']['tmp_name'], $path_upload . $renderName);
				} else {
					die();
				}

				return $renderName;
			}
		} else {
			die();
		}

	} else {
		// show popup is null file and redirect 
		echo "файла не было";
	}
}

