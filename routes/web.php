<?php


$router->get('/', function () use ($router) {
    return [
        "name" => "Foodness API",
        "description" => "The must fast and furious Food API",
        "keywords" => ["food", "api", "meal"]
    ];
});
