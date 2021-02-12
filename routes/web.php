<?php
use Illuminate\Http\Request;
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


$router->group(['prefix'=>'api/v2','middlewere'=>'autenticador'], function () use ($router){
    $router->group(['prefix'=>'estabelecimentos','middlewere'=>'autenticador'], function () use ($router){
        $router->post(uri:'', action:'EstabelecimentosController@store');
        $router->get(uri:'', action:'EstabelecimentosController@index');
        $router->get(uri:'{id}', action:'EstabelecimentosController@show');
        $router->put(uri:'{id}', action:'EstabelecimentosController@update');
        $router->delete(uri:'{id}', action:'EstabelecimentosController@destroy');

        $router->get(uri:'{estabelecimento_id}/clientes', action:'EstabelecimentosController@clientesBusca');
        $router->post(uri:'{estabelecimento_id}/clientes', action:'EstabelecimentosController@clientesPost');
        $router->put(uri:'{estabelecimento_id}/clientes/{id}', action:'EstabelecimentosController@clientesUpdate');
        $router->get(uri:'{estabelecimento_id}/clientes/{id}', action:'EstabelecimentosController@clientesId');

    });
    $router->group(['prefix'=>'clientes','middlewere'=>'autenticador'], function () use ($router){
        $router->post(uri:'', action:'ClientesController@store');
        $router->get(uri:'', action:'ClientesController@index');
        $router->get(uri:'{id}', action:'ClientesController@show');
        $router->put(uri:'{id}', action:'ClientesController@update');
        $router->delete(uri:'{id}', action:'ClientesController@destroy');
        $router->get(uri:'', action:'ClientesController@index');
    });
     $router->group(['prefix'=>'page/clientes', 'middlewere'=>'autenticador'], function () use ($router){
        $router->get(uri:'', action:'ClientesController@page');
    });
    $router->group(['prefix'=>'page/estabelecimentos', 'middlewere'=>'autenticador'], function () use ($router){
        $router->get(uri:'', action:'EstabelecimentosController@page');
    });
   
});

$router->post(uri:'/api/v2/login', action:'TokenController@createToken');