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
    $router->group(['prefix'=>'estabelecimentos'], function () use ($router){
        $router->post(uri:'', action:'EstabelecimentosController@store');
        $router->get(uri:'', action:'EstabelecimentosController@index');
        $router->get(uri:'{id}', action:'EstabelecimentosController@show');
        $router->put(uri:'{id}', action:'EstabelecimentosController@update');
        $router->delete(uri:'{id}', action:'EstabelecimentosController@destroy');
    });
    $router->group(['prefix'=>'clientes'], function () use ($router){
        $router->post(uri:'', action:'ClientesController@store');
        $router->get(uri:'', action:'ClientesController@index');
        $router->get(uri:'{id}', action:'ClientesController@show');
        $router->put(uri:'{id}', action:'ClientesController@update');
        $router->delete(uri:'{id}', action:'ClientesController@destroy');
    });
});