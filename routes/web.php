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
    return $router->app->version();
});


$router->group(['prefix'=>'api/v2'], function () use ($router){
    $router->post('estabelecimentos', action:'EstabelecimentosController@store');
    $router->get('estabelecimentos', action:'EstabelecimentosController@index');
    $router->get('estabelecimentos/{id}', action:'EstabelecimentosController@get');
});