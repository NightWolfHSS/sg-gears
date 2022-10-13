<?php 
/*
*------------------
* sg-GEARS
* project started: 
* psr-2
* -----------------
* file configuration for web
* bootstrap file Router
*/
header('Content-Type: text/html; charset=UTF-8');

require 'app/db/config.php';
require 'app/vendor/autoload.php';
require 'app/modules/functions.php';

// Routes 
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
	$r->addRoute('GET', '/', 'app/temp/home-view.php');
	$r->addRoute('GET', '/home', 'app/temp/home-view.php');
    $r->addRoute('GET', '/sweg', 'app/temp/sweg.php');
    $r->addRoute('GET', '/about', 'app/temp/contact-view.php');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        require 'app/temp/errors/404.php';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        require 'app/temp/errors/405.php';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
        require $handler;
        break;
}