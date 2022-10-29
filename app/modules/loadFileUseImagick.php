<?php 
/*
*( v1/.4)
* use DRY
* this is module use:  
* create file | compress | generate name file | delete old file time folder`s 
* return new file
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
			$move = move_uploaded_file($tmp_name, "$path_upload/$name"); 
			$stmt = file_compress($name);
			delete_old_image($name);
			return $stmt;
		} else {
			return die();
		}

	} else {
		// show popup is null file and redirect 
		echo "файла не было ";
	}
}

/*file compress*/
function file_compress($file)
{
	$path_to = dirname(__DIR__).'\upload\\';
	$gen_code = uniqid().'.jpg';
	$cnf = $path_to.$gen_code;
	$img = new Imagick(dirname(__DIR__). '\outtimefiles'.'\\'.$file);
	$img->setImageFormat('jpg');
	$img->setImageCompressionQuality(70);
	if (!file_exists($cnf)) {
		$img->writeImage($cnf);
	}
	return $gen_code;
}

/*delete old file*/
function delete_old_image($imagen)
{
	unlink(dirname(__DIR__).'\outtimefiles\\'.$imagen);
}



?>