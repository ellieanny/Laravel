<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - WildGuard Conservation</title>

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
            background-image: url('images/forest.jpg');
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
            background: rgba(0,0,0,0.45);
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
            max-width: 800px;
            margin: auto;
        }

        /* CARD SECTION */
        .card-container {
            max-width: 1100px;
            margin: -40px auto 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
        }

        .card h2 {
            color: #2a4d2e;
            margin-top: 0;
        }

        .card p {
            line-height: 1.7;
        }

        /* TEAM MEMBERS */
        .team-members {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
        }

        .member {
            text-align: center;
            padding: 15px;
            background: #f7fdf7;
            border-radius: 12px;
        }

        .member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .member h4 {
            margin: 5px 0;
            color: #2a4d2e;
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

    <!-- NAVIGATION -->
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
            <h1>About WildGuard Conservation</h1>
            <p>Dedicated to protecting endangered wildlife, restoring natural habitats, and inspiring communities to take action.</p>
        </div>
    </div>

    <!-- 3 CARDS -->
    <div class="card-container">

        <!-- WHO WE ARE -->
        <div class="card">
            <h2>Who We Are</h2>
            <p>
                WildGuard Conservation is a non-profit organization committed to the protection and preservation of wildlife 
                and natural ecosystems. Since 2012, we have been rescuing endangered species, restoring habitats, and educating 
                communities about sustainable environmental practices.
            </p>
            <p>
                Our mission is to create long-lasting conservation solutions that benefit both wildlife and people. We believe 
                every individual plays a role in restoring the natural balance of our planet.
            </p>
        </div>

        <!-- OUR VISION -->
        <div class="card">
            <h2>Our Vision</h2>
            <p>
                A future where wildlife thrives freely and ecosystems are protected for generations. We envision a world where 
                humans coexist harmoniously with nature, guided by awareness, compassion, and sustainable practices.
            </p>
            <p>
                Through conservation science, education, and community engagement, we strive to build a greener and more 
                environmentally responsible world.
            </p>
        </div>

        

    </div>

    <!-- FOOTER -->
    <div class="footer">
        &copy; <?php echo date("Y"); ?> WildGuard Conservation. All Rights Reserved.
    </div>

</body>
</html>
