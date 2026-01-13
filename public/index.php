<?php

/**
 * Vako Seals Website - Public Entry Point
 * This file is the entry point when public directory is the document root
 */

// Start session
session_start();

// Define base paths (public is the document root, so go up one level for root)
define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('VIEWS_PATH', ROOT_PATH . '/views');
define('PUBLIC_PATH', __DIR__);

// Handle subdirectory base path
$basePath = '';
if (isset($_SERVER['SCRIPT_NAME'])) {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    if (preg_match('#^(.+?)/index\.php$#', $scriptName, $matches)) {
        $basePath = rtrim($matches[1], '/');
    }
}

// Store base path globally
$GLOBALS['basePath'] = $basePath;

// Load helper functions
require_once APP_PATH . '/helpers.php';

// Load mail functions
require_once APP_PATH . '/mail.php';

// Simple router
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Remove base path from request URI if present
if ($basePath && $basePath !== '') {
    // Remove base path if it's at the start of the URI
    if (strpos($requestUri, $basePath) === 0) {
        $requestUri = substr($requestUri, strlen($basePath));
    }
}

$requestUri = rtrim($requestUri, '/') ?: '/';

// Define routes
$routes = [
    'GET' => [
        '/' => ['HomeController', 'index'],
        '/about' => ['AboutController', 'index'],
        '/capabilities' => ['CapabilitiesController', 'index'],
        '/products' => ['ProductController', 'index'],
        '/polymers' => ['PolymersController', 'index'],
        '/inquiry' => ['InquiryController', 'create'],
        '/contact' => ['ContactController', 'index'],
        '/thank-you' => ['InquiryController', 'thankYou'],
    ],
    'POST' => [
        '/inquiry' => ['InquiryController', 'store'],
    ],
];

// Route matching
if (isset($routes[$requestMethod][$requestUri])) {
    $route = $routes[$requestMethod][$requestUri];
    $controllerName = $route[0];
    $methodName = $route[1];
    
    $controllerFile = APP_PATH . '/Controllers/' . $controllerName . '.php';
    
    if (file_exists($controllerFile)) {
        require_once $controllerFile;
        
        if (class_exists($controllerName)) {
            try {
                $controller = new $controllerName();
                
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                    exit;
                } else {
                    error_log("Method $methodName not found in $controllerName");
                }
            } catch (Exception $e) {
                error_log("Error instantiating $controllerName: " . $e->getMessage());
                http_response_code(500);
                echo "500 - Internal Server Error";
                exit;
            }
        } else {
            error_log("Class $controllerName not found after requiring file");
        }
    } else {
        error_log("Controller file not found: $controllerFile");
    }
} else {
    error_log("Route not found: $requestMethod $requestUri (BasePath: $basePath)");
}

// 404 Not Found
http_response_code(404);
echo "404 - Page Not Found";
exit;
