<?php
// Professional Error Handling Configuration

// Environment detection
define('ENVIRONMENT', 'development'); // Change to 'production' when live

// Error reporting settings based on environment
if (ENVIRONMENT === 'development') {
    // Development: Show all errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
} else {
    // Production: Hide errors, log them instead
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', '../logs/php_errors.log');
}

// Custom error handler function
function handleError($errno, $errstr, $errfile, $errline) {
    if (ENVIRONMENT === 'development') {
        echo "<div class='alert alert-danger'>";
        echo "<strong>PHP Error:</strong> [$errno] $errstr<br>";
        echo "File: $errfile<br>";
        echo "Line: $errline";
        echo "</div>";
    } else {
        error_log("PHP Error: [$errno] $errstr in $errfile on line $errline");
    }
}

// Set custom error handler
set_error_handler('handleError');

// Exception handler
function handleException($exception) {
    if (ENVIRONMENT === 'development') {
        echo "<div class='alert alert-danger'>";
        echo "<strong>Exception:</strong> " . $exception->getMessage() . "<br>";
        echo "File: " . $exception->getFile() . "<br>";
        echo "Line: " . $exception->getLine();
        echo "</div>";
    } else {
        error_log("Exception: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " . $exception->getLine());
        
        // Show user-friendly error page
        http_response_code(500);
        include '../views/errors/500.php';
    }
}

// Set exception handler
set_exception_handler('handleException');

// Fatal error handler
register_shutdown_function(function() {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        if (ENVIRONMENT === 'development') {
            echo "<div class='alert alert-danger'>";
            echo "<strong>Fatal Error:</strong> " . $error['message'] . "<br>";
            echo "File: " . $error['file'] . "<br>";
            echo "Line: " . $error['line'];
            echo "</div>";
        } else {
            error_log("Fatal Error: " . $error['message'] . " in " . $error['file'] . " on line " . $error['line']);
        }
    }
});

// Helper function for safe variable output
function safeEcho($variable, $default = '') {
    echo htmlspecialchars($variable ?? $default, ENT_QUOTES, 'UTF-8');
}

// Helper function for debugging (development only)
function debug($variable, $label = 'Debug') {
    if (ENVIRONMENT === 'development') {
        echo "<div class='alert alert-info'>";
        echo "<strong>$label:</strong><br>";
        echo "<pre>" . print_r($variable, true) . "</pre>";
        echo "</div>";
    }
}
?>
