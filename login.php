<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #f4f4f4;
    }

    .login-container {
        max-width: 400px;
        margin: 100px auto;
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
    }
</style>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <!-- The form action will post the data to the PHP script -->
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>



<?php
// Start the session to track login
session_start();

// Predefined admin credentials (for demonstration purposes)
$admin_username = "sneha";
$admin_password = "sneha@200";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials match
    if ($username == $admin_username && $password == $admin_password) {
        // Set session variable for logged-in admin
        $_SESSION['admin_logged_in'] = true;

        // Redirect to admin page
        header("Location: admin.php");
        exit();
    } else {
        // Invalid credentials, show error message
        echo "<div style='text-align: center; color: red;'>Invalid username or password. Please try again.</div>";
    }
}
?>

