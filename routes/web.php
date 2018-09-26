<?php

$router->get('/', function () use ($router) {
    return [
        "name" => "Foodness API",
        "description" => "The fastest and furious Food API",
        "repository" => "https://github.com/jairforo/foodness-api",
        "keywords" => ["food", "api"]
    ];
});

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->group([
        'prefix' => 'categories'
    ], function() use ($router) {
        $router->get('/', 'CategoryController@index');
    });

    $router->group([
        'prefix' => 'restaurants'
    ], function() use ($router) {
        $router->get('/', 'RestaurantController@index');
    });

    $router->group([
        'prefix' => 'users'
    ], function() use ($router) {
        $router->get('/', 'UserController@index');
    });
});

