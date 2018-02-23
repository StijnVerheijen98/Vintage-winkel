<?php

/**
 * API V1 routes
 *
 * @var \Laravel\Lumen\Routing\Router $router
 */
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