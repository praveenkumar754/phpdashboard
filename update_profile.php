<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php5";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

// Fetch current user data
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}

// Handle profile update form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['password']);

    $update_sql = "UPDATE users SET 
                   name='$name', 
                   email='$email', 
                   phone='$phone'";
    
    // Update password only if provided
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $update_sql .= ", password='$hashed_password'";
    }

    $update_sql .= " WHERE id='$user_id'";

    if ($conn->query($update_sql)) {
        echo "Profile updated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Update Profile</h1>
    <form action="update_profile.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>

        <label for="password">New Password (optional):</label>
        <input type="password" id="password" name="password" placeholder="Enter a new password">

        <button type="submit">Update Profile</button>
    </form>

    <!-- Back to Welcome Button -->
    <form action="welcome.php" method="get">
        <button type="submit">Back to Welcome</button>
    </form>
</body>
</html>
