<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - WildGuard Conservation</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #eef2f1;
            color: #333;
        }

        /* NAVBAR */
        .navbar {
            background-color: #2a4d2e;
            padding: 18px 25px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .navbar a {
            color: #d4f1d2;
            text-decoration: none;
            margin-left: 20px;
        }

        .navbar a:hover {
            color: #ffffff;
        }

        /* HEADER */
        .header {
            background-image: url('images/contact.jpg'); /* Replace with your nature photo */
            background-position: center;
            background-size: cover;
            text-align: center;
            padding: 100px 20px;
            color: white;
            position: relative;
        }

        .header::after {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.45);
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .header h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 20px;
            max-width: 700px;
            margin: auto;
        }

        /* CONTACT SECTION */
        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            margin-top: -40px;
            border-radius: 12px;
            padding: 40px 20px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
        }

        .form-section {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .contact-form {
            flex: 1;
            min-width: 280px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        .contact-form textarea {
            height: 120px;
        }

        .contact-form button {
            background-color: #2a4d2e;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #1c351f;
        }

        /* CONTACT INFO */
        .info {
            flex: 1;
            min-width: 260px;
            background: #f7fdf7;
            padding: 20px;
            border-radius: 12px;
        }

        .info h3 {
            margin-top: 0;
            color: #2a4d2e;
        }

        .info p {
            line-height: 1.7;
        }

        /* MAP */
        .map {
            margin-top: 35px;
        }

        .footer {
            background-color: #2a4d2e;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">WildGuard Conservation</div>
        <div>
            <a href="index.php">Home</a>
            <a href="projects.php">Projects</a>
            <a href="donate.php">Donate</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>

            <?php if(isset($_SESSION['username'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- HEADER -->
    <div class="header">
        <div class="header-content">
            <h1>Contact Us</h1>
            <p>Have questions or want to get involved? We’d love to hear from you.</p>
        </div>
    </div>

    <!-- CONTACT FORM SECTION -->
    <div class="container">

        <h2 style="text-align:center; color:#2a4d2e;">Get in Touch</h2>

        <div class="form-section">

            <!-- CONTACT FORM -->
            <div class="contact-form">
                <form method="POST" action="send_message.php">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Write your message..." required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>

            <!-- CONTACT INFO -->
            <div class="info">
                <h3>📍 Our Office</h3>
                <p>WildGuard Conservation Center<br>
                Green Valley Eco Park<br>
                Cebu, Philippines</p>

                <h3>📞 Contact Numbers</h3>
                <p>Phone: (032) 456-7891<br>
                Mobile: +63 912 345 6789</p>

                <h3>📧 Email</h3>
                <p>wildguardconservation@gmail.com</p>

                <h3>🕒 Office Hours</h3>
                <p>Monday – Friday: 8:00 AM – 5:00 PM</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        &copy; <?php echo date("Y"); ?> WildGuard Conservation. All Rights Reserved.
    </div>

</body>
</html>
