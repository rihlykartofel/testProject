<?php

use App\Controllers\IndexController;
use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controllers');
$router->setBasePath('/');

$router->get('/', 'Index@index');
$router->get('/(\d+)', 'Index@show');

$router->run();