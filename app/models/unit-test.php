<?php 
// getData for Home page

function test_render_response_handler()
{
	http_response_code(404);
	 header('Content-Type: application/json; charset=utf-8');

header ('Status: 404 Not Found');
	echo "base";
}

test_render_response_handler();