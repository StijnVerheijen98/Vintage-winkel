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

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return view('test', ['version' => $router->app->version()]);
});

// API Versioning, V1
$router->group(['prefix' => 'v1', 'namespace' => 'V1'], function () use ($router) {
    // /api/v1/
    $router->group([['middleware' => 'auth']], function () use ($router) {
        // Uses the auth middleware to handle authentication
    });

    $router->group(['prefix' => 'products'], function () use ($router) {
        // /api/v1/products
        // Get products
        $router->get('', 'Products@all');
        // Get one product
        $router->get('{id}', 'Products@get');

        $router->group(['middleware' => 'auth'], function () use ($router) {
            // require authentication
            // Add a product
            $router->post('', 'Products@add');
            // Update a product
            $router->put('{id}', 'Product@update');
            // Delete a product
            $router->delete('{id}', 'Product@delete');
        });
    });
});

