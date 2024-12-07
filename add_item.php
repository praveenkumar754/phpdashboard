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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $user_id = $_SESSION['user_id'];

    // Handle image upload
    $image = $_FILES['image'];
    $upload_dir = 'uploads/';
    $image_path = $upload_dir . basename($image['name']);

    // Check if the uploads directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    if (move_uploaded_file($image['tmp_name'], $image_path)) {
        $sql = "INSERT INTO items (user_id, title, description, image_path) 
                VALUES ('$user_id', '$title', '$description', '$image_path')";
        if ($conn->query($sql)) {
            header("Location: view_items.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload image. Ensure the 'uploads' directory exists and is writable.";
    }
}

$conn->close();
?>
