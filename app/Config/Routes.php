<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jualProduk', 'jualProduk::index');
$routes->setAutoRoute(true);
