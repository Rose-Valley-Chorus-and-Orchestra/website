<?php
// init.php

// Start session
if(!session_id()) session_start();

// Simple debug logger (writes to /tmp or your account's tmp folder)
function debug_log($message) {
    $file = __DIR__ . '/debug.log'; // You can change location if needed
    $date = date('Y-m-d H:i:s');
    $msg = is_array($message) || is_object($message) ? print_r($message, true) : $message;
    file_put_contents($file, "[$date] $msg\n", FILE_APPEND);
}


// Load DB credentials from outside test folder
$config = require '/home/rvco/config/creds.php';

// Build DSN
$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

try {
    $pdo = new PDO(
        $dsn,
        $config['db_user'],
        $config['db_pass'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    if (function_exists('openssl_random_pseudo_bytes')) {
        $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
    } else {
        // Fallback for older PHP versions
        $_SESSION['csrf_token'] = md5(uniqid(mt_rand(), true));
    }
}


// ----------------- RATE LIMIT -----------------
define('RATE_LIMIT_STORE', sys_get_temp_dir() . '/rvco_rate_limit.json');

?>