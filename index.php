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

// Routes | CRUD
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    /*ADMIN*/
    $r->addRoute('GET', '/admin-p', 'app/temp/admin/panel.php');
    /*READ*/
	$r->addRoute('GET', '/', 'app/temp/home-view.php');
	$r->addRoute('GET', '/home', 'app/temp/home-view.php');
    $r->addRoute('GET', '/about', 'app/temp/contact-view.php');
    $r->addRoute('GET', '/gallery', 'app/temp/gallery-view.php');
    $r->addRoute('GET', '/product', 'app/temp/product-view.php');
    $r->addRoute('GET', '/service', 'app/temp/service-view.php');
    $r->addRoute('GET', '/test', 'app/models/m-home.php');
    /*ONLY-ADMIN*/
    /*CREATE*/
    /*UPDATE*/
    /*DELETE*/
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