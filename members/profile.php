<?php
    // Start session and include init.php
    require_once __DIR__ . '/../init/init.php';

    // Check if the user is logged in
    if (empty($_SESSION['user_id'])) {
        // User not logged in, redirect to home page
        header('Location: ../index.php');
        exit;
    }

    // Optionally, fetch user info from DB to display
    $stmt = $pdo->prepare("SELECT fname, lname, email FROM members WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();

    if (!$user) {
        // If somehow the user_id is invalid, destroy session and redirect
        session_destroy();
        header('Location: ../index.php');
        exit;
    }
?>
<!doctype html>
<html lang="en">

    <?php include 'includes/head.php'; ?>

    <body>
    
        <?php include 'includes/members_header.php'; ?>

        <!-- Main content -->
        <main>
            <div class="container">
                Profile Page
            </div>
        </main>

        <?php include 'includes/scripts.php'; ?>
    </body>
</html>



