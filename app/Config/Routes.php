<?php

namespace Config;

$routes = Services::routes();
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');

//crud usuários
$routes->get('usuarios/edit/$id', 'Usuarios::edit');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('novo', 'Usuarios::novo');


// crud clientes 
$routes->get('clientes/edit/$id', 'Clientes::edit');
$routes->get('clientes', 'Clientes::index');

// crud categorias
$routes->get('categorias/edit/$id', 'Categorias::edit');
$routes->get('categorias', 'Categorias::index');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
