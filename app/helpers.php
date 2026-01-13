<?php

/**
 * Helper Functions
 */

if (!function_exists('view')) {
    /**
     * Render a view template
     */
    function view($template, $data = [])
    {
        extract($data);
        $basePath = $GLOBALS['basePath'] ?? '';
        
        // Initialize title and description if not set
        if (!isset($title)) $title = 'Vako Seals Pvt. Ltd.';
        if (!isset($description)) $description = 'Vako Seals Pvt. Ltd. - Leading manufacturer of elastomeric seals, sealing elements and various rubber products';
        
        // Start output buffering for content
        ob_start();
        
        // Include the view content first
        $viewPath = VIEWS_PATH . '/' . $template . '.php';
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo "View not found: " . $template;
        }
        $content = ob_get_clean();
        
        // Include the layout if it exists
        $layoutPath = VIEWS_PATH . '/layouts/app.php';
        if (file_exists($layoutPath)) {
            include $layoutPath;
        } else {
            // No layout, just output content
            echo $content;
        }
    }
}

if (!function_exists('asset')) {
    /**
     * Generate asset URL
     */
    function asset($path)
    {
        $basePath = $GLOBALS['basePath'] ?? '';
        $path = ltrim($path, '/');
        
        // Check if we're running from public directory (document root)
        // Check if the script is in the public directory
        $scriptFile = $_SERVER['SCRIPT_FILENAME'] ?? '';
        $isPublicRoot = strpos($scriptFile, DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR) !== false || 
                        basename(dirname($scriptFile)) === 'public';
        
        if ($isPublicRoot) {
            // We're already in public directory (document root), so just use the path
            return $basePath . '/' . $path;
        } else {
            // We're in root, need to add /public/ prefix
            return $basePath . '/public/' . $path;
        }
    }
}

if (!function_exists('route')) {
    /**
     * Generate route URL
     */
    function route($name, $params = [])
    {
        $basePath = $GLOBALS['basePath'] ?? '';
        
        $routes = [
            'home' => '/',
            'about' => '/about',
            'capabilities' => '/capabilities',
            'products' => '/products',
            'polymers' => '/polymers',
            'inquiry.create' => '/inquiry',
            'inquiry.store' => '/inquiry',
            'contact' => '/contact',
            'thank-you' => '/thank-you',
        ];
        
        if (isset($routes[$name])) {
            return $basePath . $routes[$name];
        }
        
        return $basePath . '/';
    }
}

if (!function_exists('redirect')) {
    /**
     * Redirect to a URL
     */
    function redirect($url, $statusCode = 302)
    {
        header('Location: ' . $url, true, $statusCode);
        exit;
    }
}

if (!function_exists('old')) {
    /**
     * Get old input value from session
     */
    function old($key, $default = null)
    {
        return $_SESSION['_old_input'][$key] ?? $default;
    }
}

if (!function_exists('request')) {
    /**
     * Get request helper
     */
    function request()
    {
        return new class {
            public function routeIs($pattern)
            {
                $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                $basePath = $GLOBALS['basePath'] ?? '';
                
                if ($basePath && strpos($requestUri, $basePath) === 0) {
                    $requestUri = substr($requestUri, strlen($basePath));
                }
                
                $requestUri = rtrim($requestUri, '/') ?: '/';
                
                // Simple pattern matching
                if (strpos($pattern, '*') !== false) {
                    $pattern = str_replace('*', '.*', $pattern);
                    return preg_match('#^' . $pattern . '$#', $requestUri);
                }
                
                return $requestUri === $pattern;
            }
            
            public function input($key = null, $default = null)
            {
                if ($key === null) {
                    return array_merge($_GET, $_POST);
                }
                
                if (isset($_POST[$key])) {
                    return $_POST[$key];
                }
                
                if (isset($_GET[$key])) {
                    return $_GET[$key];
                }
                
                return $default;
            }
            
            public function all()
            {
                return array_merge($_GET, $_POST);
            }
        };
    }
}

if (!function_exists('csrf_token')) {
    /**
     * Generate CSRF token
     */
    function csrf_token()
    {
        if (empty($_SESSION['_token'])) {
            $_SESSION['_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['_token'];
    }
}

if (!function_exists('csrf_field')) {
    /**
     * Generate CSRF hidden input field
     */
    function csrf_field()
    {
        return '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    }
}