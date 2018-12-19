<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->put('/posts/{id}', 'PostController@update');
$router->get('/posts/{id}', 'PostController@show');
$router->delete('/posts/{id}', 'PostController@delete');
$router->post('/posts', 'PostController@store');
$router->get('/posts', 'PostController@index');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/key', function() {
    return str_random(32);
});

