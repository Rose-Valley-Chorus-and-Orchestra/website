<?php
header('Content-Type: application/json');
$request = json_decode(file_get_contents("php://input"), true);

if (!$request || !isset($request['action'])) {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
    exit;
}

$pdo = new PDO("mysql:host=localhost;dbname=yourdb;charset=utf8", "dbuser", "dbpass");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

switch ($request['action']) {
    case "signup":
        $email = $request['email'] ?? '';
        $password = $request['password'] ?? '';

        if (!$email || !$password) {
            echo json_encode(["success" => false, "message" => "Missing fields"]);
            exit;
        }

        // ✅ Use password_hash (bcrypt), NOT raw SHA256
        $hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->execute([$email, $hash]);
            echo json_encode(["success" => true]);
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // duplicate email
                echo json_encode(["success" => false, "message" => "Email already registered"]);
            } else {
                echo json_encode(["success" => false, "message" => "DB error"]);
            }
        }
        break;

    case "login":
        $username = $request['username'] ?? '';
        $password = $request['password'] ?? '';

        $stmt = $pdo->prepare("SELECT id, email, password FROM users WHERE email = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            echo json_encode([
                "success" => true,
                "user" => ["id" => $user['id'], "name" => $user['email']]
            ]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid credentials"]);
        }
        break;

    default:
        echo json_encode(["success" => false, "message" => "Unknown action"]);
}
