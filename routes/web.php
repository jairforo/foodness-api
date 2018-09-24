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

    $router->group(['prefix' => 'categories'], function() use ($router) {
        $router->get('/', function ()    {
            return \App\Category::all();
        });
    });
});

