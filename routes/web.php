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
 
$router->get('sensors', 'Sensorscontroller@index');
$router->get('sensors/{id}', 'Sensorscontroller@show');
$router->post('sensors', 'Sensorscontroller@store'); #insertar
$router->put('sensors/{id}', 'Sensorscontroller@update');
$router->delete('sensors/{id}', 'Sensorscontroller@destroy');

$router->get('actuators', 'Actuatorscontroller@index');
$router->get('actuators/{id}', 'Actuatorscontroller@show');
$router->post('actuators', 'Actuatorscontroller@store'); #insertar
$router->put('actuators/{id}', 'Actuatorscontroller@update');
$router->delete('actuators/{id}', 'Actuatorscontroller@destroy');