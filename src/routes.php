<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->post('/post/new', 'PostController@new');

$router->get('/perfil/{id}/follow', 'ProfileController@follow'); // Seguir
$router->get('/perfil/{id}', 'ProfileController@index'); // Primeiro por causa da validação em sequência.
$router->get('/perfil', 'ProfileController@index');

$router->get('/sair', 'LoginController@logout');


//$router->get('/pesquisar',
//$router->get('/amigos',
//$router->get('/fotos',
//$router->get('/config',
