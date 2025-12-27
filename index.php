<?php
session_start();

// If user is already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User System - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="hero-box">
            <h1>Welcome to User System</h1>
            <p>A secure and simple user registration and login system built with PHP and MySQL.</p>
            
            <div class="btn-group">
                <a href="login.php" class="btn-primary">Login</a>
                <a href="register.php" class="btn-secondary">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
