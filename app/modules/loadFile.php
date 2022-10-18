<?php 
/*
* func create imagen
* generate | comress imagen
* delete old imagen
* return void
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
			file_compress($name);
			delete_old_image($name);
		} else {
			return die();
		}

	} else {
		// show popup is null file and redirect 
		echo "файла не было ";
	}
	echo "загружено!";
}

/*file compress*/
function file_compress($file)
{
	$path_to = dirname(__DIR__).'\upload\\';
	$cnf = $path_to.uniqid().'.jpg';
	$img = new Imagick(dirname(__DIR__). '\outtimefiles'.'\\'.$file);
	$img->setImageFormat('jpg');
	$img->setImageCompressionQuality(70);
	if (!file_exists($cnf)) {
		$img->writeImage($cnf);
	}
	
}

/*delete old file*/
function delete_old_image($imagen)
{
	unlink(dirname(__DIR__).'\outtimefiles\\'.$imagen);
}



?>