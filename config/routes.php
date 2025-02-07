<?php
use App\Core\Router;
use App\Controllers\Front\HomeController;
use App\Controllers\Front\AuthController;
use App\Controllers\Front\ClientController;

$router = new Router();


// for testing 
$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('GET', '/register', [AuthController::class, 'showSingnUp']);
$router->add('GET','/login',[AuthController::class, 'showlogin']);
$router->add('GET','/client',[ClientController::class, 'showClient']);

$router->dispatch();
// die();
