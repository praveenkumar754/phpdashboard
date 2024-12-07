<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add the CSS styles from your existing contact form page */
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

    <div class="container">
        <h1>Contact Us</h1>
        <form action="contact_process.php" method="post">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" required>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" required>

            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" id="phone" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="gender">Gender</label>
            <select name="gender" id="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="message">Message</label>
            <textarea name="message" id="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
