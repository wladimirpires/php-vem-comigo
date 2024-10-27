<?php

$routes = [
    '/' => 'HomeController@index',
    '/showCadastro' => 'UserController@showCadastro',
    '/cadastro' => 'UserController@cadastro',
    '/listagem' => 'UserController@list',
    '/delete/{id}' => 'UserController@delete',
    '/showUpdate/{id}' => 'UserController@showUpdate',
    '/update' => 'UserController@update',
]


?>