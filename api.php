<?php
require_once __DIR__ . '/init.php';

// ---------------- Debug Mode (shows PHP errors in browser) ----------------
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ---------------- Force JSON Response ----------------
header('Content-Type: application/json');

// ---------------- Merge JSON input into $_POST ----------------
if ($_SERVER["CONTENT_TYPE"] === "application/json") {
    $input = json_decode(file_get_contents("php://input"), true);
    if (is_array($input)) {
        $_POST = array_merge($_POST, $input);
    }
}

// ---------------- CSRF Protection ----------------
if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo json_encode(["success" => false, "message" => "Invalid CSRF token"]);
    exit;
}

// Read action from AJAX
$action = $_POST['action'] ?? null;

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

    debug_log("Signup attempt: email=$email");

    if (!$fName || !$lName ||!$email || !$emailConfirm || !$password) {
        debug_log("Signup attempt: email=$email");
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        return;
    }

    if ($email !== $emailConfirm) {
        debug_log("Signup failed: emails do not match");
        echo json_encode(["success" => false, "message" => "Emails do not match."]);
        return;
    }

    try{
        // Check if email exists
        $stmt = $pdo->prepare("SELECT id FROM members WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            debug_log("Signup failed: email exists");
            echo json_encode(["success" => false, "message" => "Email already registered."]);
            return;
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO members (fname, lname, email, password) VALUES (?,?,?,?)");
        $stmt->execute([$fName, $lName, $email, $hashedPassword]);

        debug_log("Signup success: $email");

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