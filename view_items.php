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

// SQL query to select items for the logged-in user and order them by title (ascending)
$sql = "SELECT * FROM items WHERE user_id='" . $_SESSION['user_id'] . "' ORDER BY title ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Items</title>
</head>
<body>
    <h1>My Items</h1>
    <?php if ($result->num_rows > 0): ?>
        <ol>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Image" style="max-width: 200px;">
                </li>
            <?php endwhile; ?>
        </ol>
    <?php else: ?>
        <p>No items found.</p>
    <?php endif; ?>
    <a href="welcome.php">Back</a>
</body>
</html>