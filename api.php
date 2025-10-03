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

        case "setPassword":
            setnewPassword($pdo);
            break;

        case "setPassword":
            forgotPassword($pdo);
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

    $stmt = $pdo->prepare("SELECT id, pass, tmp_pass, fname, lname FROM members WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user) {
        echo json_encode(["success"=>false,"message"=>"Invalid credentials."]);
        return;
    }

    // First login case (tmp_pass matches, password is empty)
    if (empty($user['pass']) && !empty($user['tmp_pass']) && $password === $user['tmp_pass']) {
        $_SESSION['first_login_id'] = $user['id'];
        echo json_encode([
            "success"=>true,
            "firstLogin"=>true,
            "message"=>"First time login. Please set a new password."
        ]);
        return;
    }

    // Normal login (password already set)
    if (!empty($user['pass']) && password_verify($password, $user['pass'])) {
        $_SESSION['user_id'] = $user['id'];
        echo json_encode([
            "success"=>true,
            "firstLogin"=>false,
            "message"=>"Login successful",
            "user"=>["name"=>$user['fname'].' '.$user['lname']]
        ]);
        return;
    }
}

function setNewPassword($pdo) {
    if (empty($_SESSION['first_login_id'])) {
        echo json_encode(["success"=>false,"message"=>"Not authorized."]);
        return;
    }

    $newPass = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
    if (strlen($newPass) < 12) {
        echo json_encode(["success"=>false,"message"=>"Password must be at least 12 characters."]);
        return;
    }

    $hashed = password_hash($newPass, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE members SET pass = ?, tmp_pass = NULL WHERE id = ?");
    $stmt->execute([$hashed, $_SESSION['first_login_id']]);

    // Move session to normal login
    $_SESSION['user_id'] = $_SESSION['first_login_id'];
    unset($_SESSION['first_login_id']);

    echo json_encode(["success"=>true,"message"=>"Password set successfully."]);
}

function forgotPassword($pdo) {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (!$email) {
        echo json_encode(["success"=>false,"message"=>"Email is required."]);
        return;
    }

    $stmt = $pdo->prepare("SELECT id, fname, lname FROM members WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user) {
        echo json_encode(["success"=>false,"message"=>"Email not found."]);
        return;
    }

    // Generate random 12-character temporary password
    $tmpPass = bin2hex(random_bytes(6)); // 12 hex chars

    // Save tmp_pass in database
    $stmt = $pdo->prepare("UPDATE members SET tmp_pass = ?, pass = NULL WHERE id = ?");
    $stmt->execute([$tmpPass, $user['id']]);

    // Send email (adjust headers and from address)
    $subject = "Temporary Password for Rose Valley Chorus & Orchestra";
    $message = "Hello {$user['fname']},\n\n";
    $message .= "A temporary password has been generated for your account: {$tmpPass}\n";
    $message .= "Please log in with this password and set a new password.\n\n";
    $message .= "Thank you.";

    $headers = "From: no-reply@rvco.org\r\n";

    if (mail($email, $subject, $message, $headers)) {
        echo json_encode(["success"=>true,"message"=>"Temporary password sent to your email."]);
    } else {
        echo json_encode(["success"=>false,"message"=>"Failed to send email."]);
    }
}

function logoutUser() {
    session_destroy();
    echo json_encode(["success" => true, "message" => "Logged out."]);
}

?>