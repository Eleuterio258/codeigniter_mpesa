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
$routes->get('/', 'Admin/Home::index');
$routes->get('login', 'Login::index');

//crud usuários
$routes->get('usuarios/edit/$id', 'Admin/Usuarios::edit');
$routes->get('usuarios', 'Admin/Usuarios::index');
$routes->get('novoAdmin', 'Admin/Usuarios::novo');
$routes->get('usuario', 'Admin/Usuario::login');

// crud clientes 
$routes->get('clientes/edit/$id', 'Admin/Clientes::edit');
$routes->get('clientes', 'Admin/Clientes::index');
$routes->get('create', 'Admin/Clientes::create');
$routes->get('clientes/delete/$id', 'Admin/Clientes::delete');

// crud produtos
$routes->get('produtos/edit/$id', 'Admin/Produtos::edit');
$routes->get('produtos', 'Admin/Produtos::index');
$routes->get('novoproduto', 'Admin/Produtos::novo');


// crud categorias
$routes->get('categorias/edit/$id', 'Admin/Categorias::edit');
$routes->get('categorias', 'Admin/Categorias::index');


$routes->get('/', 'Home::index');
$routes->get('hello', 'Api/Api::hello');
$routes->post('soma','Api/Api::soma');
$routes->get('findId/(:any)','Api/Api::findId/$1');
$routes->post('cadastro','Api/Api::cadastro');
$routes->get('usuarios','Api/Api::getAll');
$routes->get('login','Admin/Usuario::login');


$routes->post('pagamento', 'Api/ApiData::pagamento');
$routes->resource('users');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
