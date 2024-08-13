<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'Users::index');
$routes->get('testing', 'Users::testing');
// (:any), (:segment), (:num), (:alpha), (:alphanum), (:hash)
$routes->get('with-param/(:any)', 'Users::withParam/$1');
$routes->get('testingUlit/(:any)', 'Users::testingUlit/$1/$2');
