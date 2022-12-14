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

session_start();
ob_start();



require 'app/modules/functions.php';
require 'app/db/config.php';
require 'app/modules/conf.php';
require 'app/vendor/autoload.php';

// Routes | CRUD
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    /*TEST*/
    $r->addRoute('POST', '/sweg', 'app/modules/test.php');
    $r->addRoute('GET', '/kik', 'app/modules/migrate.php');
    // $r->addRoute('POST', '/send_db', 'app/models/unit-test.php');
    /*ADMIN _ sing - in panel hole*/
    $r->addRoute('POST', '/srtft', 'app/temp/admin/temp/is_admin.php');
    $r->addRoute('GET', '/kils4', 'app/modules/kill.php');
    $r->addRoute('GET', '/redirect_ready', 'app/temp/admin/temp/locationx.php');
    $r->addRoute('GET', '/admin-p', 'app/temp/admin/panel.php');
    $r->addRoute('GET', '/hole', 'app/temp/admin/hole.php');
    $r->addRoute('POST', '/log', 'app/modules/conf.php');
    /*admin-pages*/
    $r->addRoute('GET', '/adm-contact', 'app/temp/admin/adm-contact.php');
    $r->addRoute('GET', '/adm-gallery', 'app/temp/admin/adm-gallery.php');
    $r->addRoute('GET', '/adm-home', 'app/temp/admin/adm-home.php');
    $r->addRoute('GET', '/adm-service', 'app/temp/admin/adm-service.php');
    $r->addRoute('GET', '/adm-product', 'app/temp/admin/adm-product.php');
    /*READ | HOME | USERS*/
	$r->addRoute('GET', '/', 'app/temp/home-view.php');
	$r->addRoute('GET', '/home', 'app/temp/home-view.php');
    $r->addRoute('GET', '/about', 'app/temp/contact-view.php');
    $r->addRoute('GET', '/gallery', 'app/temp/gallery-view.php');
    $r->addRoute('GET', '/product', 'app/temp/product-view.php');
    $r->addRoute('GET', '/service', 'app/temp/service-view.php');
    /*ONLY-ADMIN*/
    /*CREATE*/
    $r->addRoute('POST', '/add_gallery', 'app/modules/mirror.php');
    $r->addRoute('POST', '/add_mini_g', 'app/modules/mirror.php');
    $r->addRoute('POST', '/add_slide', 'app/modules/mirror.php');
    $r->addRoute('POST', '/add_tips', 'app/modules/mirror.php');

    /*UPDATE*/
    /*DELETE*/
    $r->addRoute('GET', '/delete_gallery/{id:\d+}', 'app/modules/mirror.php');
    $r->addRoute('GET', '/delete_mini/{id:\d+}', 'app/modules/mirror.php');
    $r->addRoute('GET', '/delete_slide/{id:\d+}', 'app/modules/mirror.php');
    $r->addRoute('GET', '/delete_tips/{id:\d+}', 'app/modules/mirror.php');


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

