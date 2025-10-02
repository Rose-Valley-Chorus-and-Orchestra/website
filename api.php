<?php
define('API_REQUEST', true);
require_once __DIR__ . '/init/init.php';

// ---------------- Debug Mode (shows PHP errors in browser) ----------------
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ---------------- Force JSON Response ----------------
header('Content-Type: application/json');

// Read POST JSON input
$input = json_decode(file_get_contents('php://input'), true);
$action = isset($input['action']) ? $input['action'] : null;

// CSRF check
if (!isset($input['csrf_token']) || $input['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(["success" => false, "message" => "CSRF token mismatch"]);
    exit;
}

if (!$action) {
    echo json_encode(["success" => false, "message" => "No action specified."]);
    exit;
}

try{
    switch ($action) {
        case "login":
            loginUser($pdo);
            break;

        case "signup":
            signupUser($pdo);
            break;

        case "logout":
            logoutUser();
            break;

        default:
            echo json_encode(["success" => false, "message" => "Invalid action."]);
            break;
    }
} catch(Throwable $e){
    debug_log("Fatal API error: " . $e->getMessage());
    debug_log($e->getTraceAsString());

    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Server error. Check debug.log"]);
    exit;
}


// ---------------- Functions ----------------

function loginUser($pdo, $input) {
    $email = isset($input['email']) ? $input['email'] : '';
    $password = isset($input['password']) ? $input['password'] : '';

    if (!$email || !$password) {
        echo json_encode(["success" => false, "message" => "Missing email or password."]);
        return;
    }

    $stmt = $pdo->prepare("SELECT id, password, fname, lname FROM members WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo json_encode(["success" => true, "message" => "Login successful.", "user" => ["name" => $user['fname'] . ' ' . $user['lname']]]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid credentials."]);
    }
}

function signupUser($pdo, $input) {
    $fName = isset($input['fName']) ? $input['fName'] : '';
    $lName = isset($input['lName']) ? $input['lName'] : '';
    $email = isset($input['email']) ? $input['email'] : '';
    $emailConfirm = isset($input['emailConfirm']) ? $input['emailConfirm'] : '';
    $password = isset($input['password']) ? $input['password'] : '';

    if (!$fName || !$lName || !$email || !$emailConfirm || !$password) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        return;
    }

    if ($email !== $emailConfirm) {
        echo json_encode(["success" => false, "message" => "Emails do not match."]);
        return;
    }

    try {
        $stmt = $pdo->prepare("SELECT id FROM members WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            echo json_encode(["success" => false, "message" => "Email already registered."]);
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO members (fname, lname, email, password, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->execute([$fName, $lName, $email, $hashedPassword]);

        echo json_encode(["success" => true, "message" => "Signup successful!"]);
    } catch (Throwable $e) {
        debug_log("DB error in signup: " . $e->getMessage());
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Database error"]);
    }
}

function logoutUser() {
    session_destroy();
    echo json_encode(["success" => true, "message" => "Logged out."]);
}

?>