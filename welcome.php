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
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $name = $user['name'];
    $email = $user['email'];
    $phone = $user['phone'];
} else {
    echo "User not found.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="settings.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>ADMIN</h1>
        </div>
        <nav>
            <ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
              
            </ul>
        </nav>
        <div class="settings">
            <a href="#" id="settings-btn">⚙️</a>
            <div class="settings-menu" id="settings-menu">
                <a href="update_profile.php">Update Profile</a>
            </div>
        </div>
    </header>
    <main>
        <h1>Welcome, <?php echo $name; ?>!</h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        
        <button id="view-items-btn" class="all-btn">All Pages</button>


        <button id="add-btn" style="margin-top:20px;">➕ Add</button>
        <div id="add-form" style="display: none;">
            <h2>Add New Item</h2>
            <form action="add_item.php" method="post" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Title" required>
                <textarea name="description" placeholder="Description" required></textarea>
                <input type="file" name="image" required>
                <button type="submit">Submit</button>
                <div class="cancel-btn">
                <button type="button" id="cancel-btn" style="background-color: red; color: white; ">Cancel</button>
            </div>
            </form>
        </div>
    </main>
    <script>
        // Toggle settings menu
        document.getElementById('settings-btn').addEventListener('click', function() {
            const menu = document.getElementById('settings-menu');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });

        // Show add form
        document.getElementById('add-btn').addEventListener('click', function() {
            const form = document.getElementById('add-form');
            form.style.display = 'block';
        });

        // Cancel add form
        document.getElementById('cancel-btn').addEventListener('click', function() {
            const form = document.getElementById('add-form');
            form.style.display = 'none';
            window.location.href = 'welcome.php'; // Redirect to welcome.php
        });
        document.getElementById('view-items-btn').addEventListener('click', function() {
        window.location.href = 'view_items.php';
    });
    </script>
</body>
</html>
