<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/e-visa-search', 'Home::search');
$routes->get('/e-visa-support', 'Home::support');
$routes->get('/service-fee', 'Home::service');
$routes->get('/apply-visa', 'Home::apply_visa');

#### admin routes #####

$routes->get('/admin', 'Admin\HomeController::index');
$routes->get('/admin/dashboard', 'Admin\HomeController::dashboard');
