<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/productos', 'ProductoController::index');
$routes->get('/productos/crear', 'ProductoController::crear');
$routes->post('/productos/guardar', 'ProductoController::guardar');
$routes->get('/productos/editar/(:num)', 'ProductoController::editar/$1');
$routes->post('/productos/actualizar/(:num)', 'ProductoController::actualizar/$1');
$routes->get('/productos/eliminar/(:num)', 'ProductoController::eliminar/$1');

$routes->get('/clientes', 'ClienteController::index');
$routes->get('/clientes/crear', 'ClienteController::crear');
$routes->post('/clientes/guardar', 'ClienteController::guardar');
$routes->get('/clientes/editar/(:num)', 'ClienteController::editar/$1');
$routes->post('/clientes/actualizar/(:num)', 'ClienteController::actualizar/$1');
$routes->get('/clientes/eliminar/(:num)', 'ClienteController::eliminar/$1');

$routes->get('/categorias', 'CategoriaController::index');
$routes->get('/categorias/crear', 'CategoriaController::crear');
$routes->post('/categorias/guardar', 'CategoriaController::guardar');
$routes->get('/categorias/editar/(:num)', 'CategoriaController::editar/$1');
$routes->post('/categorias/actualizar/(:num)', 'CategoriaController::actualizar/$1');
$routes->get('/categorias/eliminar/(:num)', 'CategoriaController::eliminar/$1');

$routes->get('/proveedores', 'ProveedorController::index');
$routes->get('/proveedores/crear', 'ProveedorController::crear');
$routes->post('/proveedores/guardar', 'ProveedorController::guardar');
$routes->get('/proveedores/editar/(:num)', 'ProveedorController::editar/$1');
$routes->post('/proveedores/actualizar/(:num)', 'ProveedorController::actualizar/$1');
$routes->get('/proveedores/eliminar/(:num)', 'ProveedorController::eliminar/$1');

$routes->get('/ventas', 'VentaController::index');
$routes->get('/ventas/crear', 'VentaController::crear');
$routes->post('/ventas/guardar', 'VentaController::guardar');
$routes->get('/ventas/eliminar/(:num)', 'VentaController::eliminar/$1');

$routes->get('/detalleventa/(:num)', 'DetalleVentaController::index/$1');
