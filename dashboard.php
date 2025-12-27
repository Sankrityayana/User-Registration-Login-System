<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="dashboard-box">
            <h2>Welcome to Dashboard</h2>
            
            <div class="user-info">
                <div class="info-item">
                    <strong>Username:</strong> 
                    <span><?php echo htmlspecialchars($username); ?></span>
                </div>
                <div class="info-item">
                    <strong>Email:</strong> 
                    <span><?php echo htmlspecialchars($email); ?></span>
                </div>
                <div class="info-item">
                    <strong>Status:</strong> 
                    <span class="status-active">Active</span>
                </div>
            </div>
            
            <div class="dashboard-actions">
                <a href="logout.php" class="btn btn-logout">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
