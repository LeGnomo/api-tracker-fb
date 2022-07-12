<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\FacebookController;

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

// $router->get('/api-facebook',function() {
//     return FacebookController->getPosts();
// });

$router->group(['prefix' => 'facebook'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
    $router->get('/getPosts', 'FacebookController@getPosts');
});
