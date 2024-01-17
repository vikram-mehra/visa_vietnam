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
$routes->post('submit-support-form', 'FormController::submitSupportForm');

#### admin routes #####

$routes->get('/admin', 'Admin\LoginController::index');
$routes->get('/admin/dashboard', 'Admin\HomeController::dashboard');
$routes->post('submit-form', 'Admin\LoginController::setUserLogin');
$routes->get('admin/logout', 'Admin\LoginController::UserlogOut');
