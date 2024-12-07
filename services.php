<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .services-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            box-sizing: border-box;
        }

        .services-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .service-item {
            display: flex;
            align-items: center;
            margin: 20px 0;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        .service-item img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .service-item .content {
            padding: 20px;
            text-align: left;
        }

        .service-item .content h2 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #333;
        }

        .service-item .content p {
            margin: 0;
            font-size: 16px;
            color: #555;
        }

        @media (max-width: 768px) {
            .service-item {
                flex-direction: column;
                text-align: center;
            }

            .service-item img {
                width: 100%;
                height: auto;
            }

            .service-item .content {
                padding: 15px;
            }
        }
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

    <div class="services-container">
        <h1>Our Services</h1>

        <div class="service-item">
            <img src="image1.jpg" alt="Service Image">
            <div class="content">
                <h2>Service Title 1</h2>
                <p>This is the description for Service 1...</p>
            </div>
        </div>

        <div class="service-item">
            <img src="image2.jpg" alt="Service Image">
            <div class="content">
                <h2>Service Title 2</h2>
                <p>This is the description for Service 2...</p>
            </div>
        </div>

        <div class="service-item">
            <img src="image3.jpg" alt="Service Image">
            <div class="content">
                <h2>Service Title 3</h2>
                <p>This is the description for Service 3...</p>
            </div>
        </div>
    </div>
</body>
</html>
