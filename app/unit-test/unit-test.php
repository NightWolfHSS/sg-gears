<?php 
// unit page

function test_render_response_handler()
{
	http_response_code(404);
	header('Content-Type: application/json; charset=utf-8');
	header ('Status: 404 Not Found');
	echo "base";
}

// test_render_response_handler();


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
	
	// $image->thumbnailImage(800, 500);

	// echo $image;
}

// test_image_flow();
// get_files_test();