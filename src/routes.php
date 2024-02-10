<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->post('/post/new', 'PostController@new');

$router->get('/perfil/{id}/photos', 'ProfileController@photos'); 
$router->get('/perfil/{id}/amigos', 'ProfileController@friends'); 
$router->get('/perfil/{id}/follow', 'ProfileController@follow'); 
$router->get('/perfil/{id}', 'ProfileController@index'); // Primeiro por causa da validação em sequência. 
$router->get('/perfil', 'ProfileController@index'); 

$router->get('/amigos', 'ProfileController@friends'); 
$router->get('/fotos', 'ProfileController@photos'); 

$router->get('/sair', 'LoginController@logout');

//$router->get('/pesquisar',

//$router->get('/config',
