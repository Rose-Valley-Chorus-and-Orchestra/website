<?php
// init.php

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Simple debug logger (writes to /tmp or your account's tmp folder)
function debug_log($message) {
    $file = __DIR__ . '/debug.log'; // You can change location if needed
    $date = date('Y-m-d H:i:s');
    $msg = is_array($message) || is_object($message) ? print_r($message, true) : $message;
    file_put_contents($file, "[$date] $msg\n", FILE_APPEND);
}

// Generate CSRF token if not set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Load DB credentials
$config = require __DIR__ . '/creds.php';

// Build DSN
$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

try {
    $pdo = new PDO(
        $dsn,
        $config['user'],
        $config['pass'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Database connection failed."
    ]);
    exit;
}

// ----------------- CSRF TOKEN -----------------
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
define('CSRF_TOKEN', $_SESSION['csrf_token']);

// ----------------- RATE LIMIT -----------------
define('RATE_LIMIT_STORE', sys_get_temp_dir() . '/rvco_rate_limit.json');

?>