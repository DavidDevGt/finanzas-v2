<?php

// Home page
$router->map('GET', '/', function() {
    require __DIR__ . '/../views/home.php'; // Asumiendo que tienes una vista 'home.php'
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
    require __DIR__ . '/../views/dashboard/dashboard.php';
});

// Otras rutas aquí...
