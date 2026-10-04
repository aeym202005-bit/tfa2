<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('about', 'Home::about', ['as' => 'about']);
$routes->get('customers', 'CustomerController::index', ['as' => 'customers']);
$routes->get('users', 'UserController::index', ['as' => 'users']);