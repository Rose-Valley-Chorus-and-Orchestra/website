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
    $stmt = $pdo->prepare("SELECT fname, lname, email, profile_pic FROM members WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();

    // Set default profile pic if none
    $profilePic = !empty($user['profile_pic']) ? $user['profile_pic'] : '../images/members/placeholder.jpg';

    if (!$user) {
        // If somehow the user_id is invalid, destroy session and redirect
        session_destroy();
        header('Location: ../index.php');
        exit;
    }
?>
<!doctype html>
<html lang="en">

    <?php include '../includes/head.php'; ?> 

    <body>
    
        <?php include '../includes/members_header.php'; ?>

        <main class="profile-container">
            <!-- Left Sidebar -->
            <div class="profile-left">
                <img src="<?php echo $profilePic; ?>" alt="Profile Picture" class="profile-pic">
                <h2><?php echo htmlspecialchars($user['fname'] . ' ' . $user['lname']); ?></h2>
                <p><?php echo htmlspecialchars($user['email']); ?></p>
            </div>

            <!-- Right Content -->
            <div class="profile-right">
                <h3>Other Data</h3>
                <div class="other-data">
                    <p>Placeholder for additional profile information...</p>
                </div>
            </div>
        </main>

        <?php include '../includes/scripts.php'; ?>
    </body>
</html>



