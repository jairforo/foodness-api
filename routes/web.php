<?php

$router->get('/', function () use ($router) {
    return [
        "name" => "Foodness API",
        "description" => "The fastest and furious Food API",
        "repository" => "https://github.com/jairforo/foodness-api",
        "keywords" => ["food", "api"]
    ];
});

$router->group([
    'prefix' => 'auth',
], function() use ($router) {
    $router->get('/login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
    $router->get('/login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');;
});


$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->group([
        'prefix' => 'users',
    ], function() use ($router) {
        $router->get('/', 'UserController@index');
        $router->get('/{id}', 'UserController@show');
        $router->put('/{id}', 'UserController@update');
        $router->post('/', 'UserController@store');
        $router->delete('/{id}', 'UserController@destroy');
    });

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
        'prefix' => 'menus'
    ], function() use ($router) {
        $router->get('/', 'MenuController@index');
    });

    $router->group([
        'prefix' => 'addresses'
    ], function() use ($router) {
        $router->get('/', 'AddressController@index');
    });

    $router->group([
        'prefix' => 'meals'
    ], function() use ($router) {
        $router->get('/', 'MealController@index');
    });

    $router->group([
        'prefix' => 'ingredients'
    ], function() use ($router) {
        $router->get('/', 'IngredientController@index');
    });
});

