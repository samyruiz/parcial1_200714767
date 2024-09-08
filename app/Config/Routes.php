<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//rutas del proyecto
$routes->get('verClientes','ControllerClientes::cargarClientes');
$routes->post('guardar_cliente','ControllerClientes::guardarCliente');
$routes->get('eliminar_cliente/(:num)','ControllerClientes::eliminarCliente/$1');
$routes->get('localizar_modificar_cliente/(:num)','ControllerClientes::localizarCliente/$1');
$routes->post('modificar_cliente','ControllerClientes::modificarCliente');
