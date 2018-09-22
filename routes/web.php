<?php

$router->get('/', function () use ($router) {
    return [
        "name" => "Foodness API",
        "description" => "The must fast and furious Food API",
        "repository" => "https://github.com/jairforo/foodness-api",
        "keywords" => ["food", "api"]
    ];
});

$router->get('example', [
    'as' => 'profile', 'uses' => 'ExampleController@index'
]);
