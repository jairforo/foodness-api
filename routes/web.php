<?php


$router->get('/', function () use ($router) {
    return [
        'name' => 'Foodness API'
    ];
});
