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
	$img = new Imagick(dirname(__DIR__). '\outtimefiles'.'\\'.$file);
	$img->setImageFormat('jpg');
	$img->setImageCompressionQuality(70);
	$img->writeImage($path_to.'slavik.jpg');
}

/*delete old file*/
function delete_old_image($imagen)
{
	unlink(dirname(__DIR__).'\outtimefiles\\'.$imagen);
}



function test_image_flow()
{
	// include('app/upload/save.php');

	// var_dump(__DIR__);
	// echo "<br>";

	// $imagepath = dirname(__DIR__) . "dodgee.jpg";
	// var_dump($imagePath);

	$path_to = dirname(__DIR__).'\upload\\';	
	// $imagepath = __FILE__ . 'upload/dodge.jpg';
	$image = new Imagick(dirname(__DIR__).'\outtimefiles\dodge.jpg');
	$image->setImageFormat('jpg');
	$image->setImageCompressionQuality(70);
	$res = $image->getImageMimeType();
	
	echo $res;
	// $image->writeImage($path_to.'010101001010.jpg');
    // header('Content-type: image/jpg');
   	// echo $image->getImageBlob()."app\upload";
   

	// unlink(dirname(__DIR__).'\upload\dodge.jpg');
	// echo "картинка была создана";
	// $image->thumbnailImage(800, 500);

	// echo $image;
}

// test_image_flow();
get_files_test();