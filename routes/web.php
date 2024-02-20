<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    //return $router->app->version();
    return "Hola Mundo";
});

$router->get('users', 'Userscontroller@index');
$router->get('users/{id}', 'Userscontroller@show');
$router->post('users', 'Userscontroller@store'); #insertar
$router->put('users/{id}', 'Userscontroller@update');
$router->delete('users/{id}', 'Userscontroller@destroy');
 
