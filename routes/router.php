<?php

// Home page
$router->map('GET', '/', function() {
    require __DIR__ . '/../home.php';
});

// Login page
$router->map('GET', '/login', function() {
    require __DIR__ . '/../views/auth/login.php';
});

// Register page
$router->map('GET', '/register', function() {
    require __DIR__ . '/../views/auth/register.php';
});

// Dashboard page
$router->map('GET', '/dashboard', function() {
    require __DIR__ . '/../views/dashboard/index.php';
});

// Otras rutas aquí...
