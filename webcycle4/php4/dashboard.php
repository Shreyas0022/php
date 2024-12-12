<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Retrieve user data from the session
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>First Name:</td>
            <td><?php echo htmlspecialchars($user['first_name']); ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><?php echo htmlspecialchars($user['last_name']); ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo htmlspecialchars($user['dob']); ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
        </tr>
        <tr>
            <td>Mobile:</td>
            <td><?php echo htmlspecialchars($user['mobile']); ?></td>
        </tr>
    </table>

    <a href="login.php">Logout</a>
</body>
</html>
