<?php

$page = basename($_SERVER['REQUEST_URI'] ?? '');

$routes = [
    'onlyyou'       => 'views/home_view.php', 
    'home'          => 'views/home_view.php',
    'workout'       => 'views/workout_view.php',
    'progress'      => 'views/progress_view.php',
    'login'         => 'views/login_view.php',
    'register'      => 'views/register_view.php',
    'logout'        => 'views/home_view.php', 
];

if (array_key_exists($page, $routes)) {

    if ($page === 'logout') {
        logout();
    }

    require $routes[$page];
} 
else {
    require 'views/404_view.php';
    http_response_code(404);
}
