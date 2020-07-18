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

//no $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


$router->group(['prefix' => 'user'], function () use ($router) {
    $router->post('register', 'UserController@register');
    $router->post('login', 'UserController@login');
    $router->get('view-profile','UserController@viewProfile');
    $router->get('logout','UserController@logout');
    $router->post('refresh-token','UserController@refreshToken');
    $router->get('get-registered-users','UserController@allUsers');
    //$router->get('get-connected-users/{emailid}/{email}','UserController@getConnections');
    $router->post('get-connected-users','UserController@getConnections');
    //$router->post('create-connection/{emailidInit}/{emailInit}/{emailidRec}/{emailRec}', "UserController@createConnection");
    $router->post('create-connection', "UserController@createConnection");
    $router->post('update-date-time/{id}/{datetime}', 'UserController@updateDateTime');
    $router->post('cancel-connection/{id}', 'UserController@cancelConnection');
});