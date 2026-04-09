<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', static fn() => redirect()->to('/umairah-sabri-portfolio'));
$routes->get('umairah-sabri-portfolio', 'Home::index');
$routes->post('contact/send', 'Home::sendMessage');
