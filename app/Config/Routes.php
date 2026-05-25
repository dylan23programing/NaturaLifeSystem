<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/Principal', 'Principal::index');
$routes->get('/logout', 'Login::logout');

$routes->get('/Consultar', 'ConsultarController::mostrarBeneficio');



$routes->get('/Mantenimiento', 'Mantenimiento::index');





