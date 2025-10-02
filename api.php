<?php
require_once __DIR__ . '/init.php';

// Force JSON response
header('Content-Type: application/json');

// ----------------- CSRF CHECK -----------------
$csrf_token = $_POST['csrf_token'] ?? $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
if (!hash_equals($_SESSION['csrf_token'], $csrf_token)) {
    echo json_encode(["success" => false, "message" => "Invalid CSRF token."]);
    exit;
}

// Read action from AJAX
$action = $_POST['action'] ?? null;

if (!$action) {
    echo json_encode(["success" => false, "message" => "No action specified."]);
    exit;
}

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

// ---------------- Functions ----------------

function loginUser($pdo) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$email || !$password) {
        echo json_encode(["success" => false, "message" => "Missing email or password."]);
        return;
    }

    $stmt = $pdo->prepare("SELECT id, password FROM members WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo json_encode(["success" => true, "message" => "Login successful."]);
    } else {
        echo json_encode(["success" => false, "message" => "Invalid credentials."]);
    }
}

function signupUser($pdo) {
    $fName = $_POST['fName'] ?? '';
    $lName = $_POST['lName'] ?? '';
    $email = $_POST['email'] ?? '';
    $emailConfirm = $_POST['emailConfirm'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$fName || !$lName ||!$email || !$emailConfirm || !$password) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        return;
    }

    if ($email !== $emailConfirm) {
        echo json_encode(["success" => false, "message" => "Emails do not match."]);
        return;
    }

    // Check if email exists
    $stmt = $pdo->prepare("SELECT id FROM members WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(["success" => false, "message" => "Email already registered."]);
        return;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO members (fname, lname, email, password) VALUES (?,?,?,?)");
    $stmt->execute([$fName, $lName, $email, $hashedPassword]);

    echo json_encode(["success" => true, "message" => "Signup successful!"]);
}

function logoutUser() {
    session_destroy();
    echo json_encode(["success" => true, "message" => "Logged out."]);
}

?>