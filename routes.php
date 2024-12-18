<?php

$page = basename($_SERVER['REQUEST_URI'] ?? '');

$routes = [
    'onlyyou'       => 'views/home_view.php', 
    'home'          => 'views/home_view.php',
    'workout'       => 'views/workout_view.php',
    'progress'      => 'views/progress_view.php'
];

if (array_key_exists($page, $routes)) {
    require $routes[$page];
} 
else {
    require 'views/404_view.php';
    http_response_code(404);
}
