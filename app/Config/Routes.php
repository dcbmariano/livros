<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/livros', 'Livros::listar');
$routes->get('/inserir-teste', 'Livros::inserir_teste');

$routes->get('/deletar/(:num)', 'Livros::deletar/$1');