<?php

use Bramus\Router\Router;

$router = new Router();
$router->setNamespace('App\Controllers');
$router->setBasePath('/');

$router->get('/', 'Index@index');
$router->get('/(\d+)', 'Index@show');
$router->get('/admin/(\d+)', 'Index@index');
$router->get('/test', 'Index@test');
$router->set404('Error@notFound');

$router->run();