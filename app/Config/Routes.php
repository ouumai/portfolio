<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('language/(:segment)', 'Home::setLanguage/$1');
$routes->post('contact/send', 'Home::sendMessage');
