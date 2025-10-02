<?php
require_once __DIR__ . '/init/init.php';

// ---------------- Debug Mode (shows PHP errors in browser) ----------------
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ---------------- Force JSON Response ----------------
header('Content-Type: application/json');

// Read POST JSON input
$action = isset($_POST['action']) ? $_POST['action'] : null;
if(!$action) {
    echo json_encode(array("success"=>false,"message"=>"No action specified."));
    exit;
}

// CSRF check
$csrf = isset($_POST['csrf_token']) ? $_POST['csrf_token'] : '';
if(empty($csrf) || $csrf !== $_SESSION['csrf_token']) {
    echo json_encode(array("success"=>false,"message"=>"CSRF token mismatch"));
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

function loginUser($pdo) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

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

function signupUser($pdo) {
    $fName = isset($_POST['fName']) ? $_POST['fName'] : '';
    $lName = isset($_POST['lName']) ? $_POST['lName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $emailConfirm = isset($_POST['emailConfirm']) ? $_POST['emailConfirm'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

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
        $stmt = $pdo->prepare("INSERT INTO members (fname, lname, email, password) VALUES (?, ?, ?, ?)");
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