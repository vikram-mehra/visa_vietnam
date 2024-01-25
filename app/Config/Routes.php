<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/terms-of-use', 'Home::terms');
$routes->get('/privacy-and-policy', 'Home::privacy');

$routes->get('/e-visa-search', 'Home::search');
$routes->get('/e-visa-support', 'Home::support');
$routes->get('/service-fee', 'Home::service');
$routes->get('/apply-visa', 'Home::apply_visa');
$routes->post('submit-support-form', 'FormController::submitSupportForm');
$routes->post('submit-visa-form', 'FormController::submitVisaForm');
$routes->post('fetch-seach-data', 'Home::fetchSearchData');

#### admin routes #####

$routes->get('/admin', 'Admin\LoginController::index');
$routes->get('/admin/dashboard', 'Admin\HomeController::dashboard');
$routes->get('/admin/support-list', 'Admin\HomeController::supportList');
$routes->get('/admin/applied-visa', 'Admin\HomeController::appliedVisaList');
$routes->get('/admin/edit-applied-visa/(:segment)', 'Admin\HomeController::editAppliedVisaList/$1');
$routes->post('update-applied-visa/(:segment)/(:segment)/(:segment)', 'Admin\HomeController::updateVisaForm/$1/$2/$3');
$routes->post('submit-form', 'Admin\LoginController::setUserLogin');
$routes->get('admin/logout', 'Admin\LoginController::UserlogOut');
