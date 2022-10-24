<?php 
/*
* remove file
*/
function removeFile($imagen)
{
	unlink(dirname(__DIR__).'\upload\\'.$imagen);
}
?>