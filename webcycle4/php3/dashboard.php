<?php
// Check if the user is logged in via cookies
if (isset($_COOKIE['user'])) {
    $user = json_decode($_COOKIE['user'], true); // Decode the cookie into an array
} else {
    // Redirect to login if no cookie is found
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['first_name']); ?>!</h1>
    <h2>Your Details</h2>
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
