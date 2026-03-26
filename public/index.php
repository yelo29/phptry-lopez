<?php
// Database configuration
require_once '../src/config/database.php';

// Start session
session_start();

// Basic routing
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Remove query string
$path = explode('?', $path)[0];

// Simple router
switch ($path) {
    case '/':
    case '/index.php':
        require_once '../src/views/home.php';
        break;
    case '/about':
        require_once '../src/views/about.php';
        break;
    case '/contact':
        require_once '../src/views/contact.php';
        break;
    case '/api/data':
        // AJAX endpoint example
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Hello from AJAX!']);
        break;
    default:
        http_response_code(404);
        require_once '../src/views/404.php';
        break;
}
?>
