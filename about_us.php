<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
       <style>
    .about-us-container {
        padding: 20px;
        background-color: #f0f8ff;
        text-align: center;
    }

    .about-us-container h1 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #333;
    }

    .about-us-content {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px auto;
        max-width: 900px;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .about-us-content img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .about-us-content .content {
        padding: 20px;
        text-align: left;
    }

    .about-us-content .content h2 {
        margin: 0 0 10px;
        font-size: 24px;
        color: #333;
    }

    .about-us-content .content p {
        margin: 0;
        font-size: 16px;
        color: #555;
    }

    @media (max-width: 768px) {
        .about-us-content {
            flex-direction: column;
        }

        .about-us-content img {
            width: 100%;
            height: auto;
        }

        .about-us-content .content {
            text-align: center;
            padding: 15px;
        }
    }
</style>

    </style>
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
    </header>

    <div class="about-us-container">
        <h1>About Us</h1>
        <div class="about-us-content">
            <img src="image1.jpg" alt="About Us Image">
            <div class="content">
                <h2>Welcome to Our Company</h2>
                <p>Our company has been a pioneer in delivering top-notch services...</p>
            </div>
        </div>
    </div>
</body>
</html>
