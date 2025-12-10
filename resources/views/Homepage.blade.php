<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WildGuard Conservation</title>

    <!-- STYLES -->
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #eef2f1;
            color: #333;
        }

        /* NAVIGATION */
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
            letter-spacing: 1px;
        }

        .navbar a {
            color: #d4f1d2;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
        }

        .navbar a:hover {
            color: #ffffff;
        }

        /* HERO SECTION */
        .hero {
            background-image: url('images/wildlife.jpg'); /* Replace with your own image */
            background-size: cover;
            background-position: center;
            padding: 120px 20px;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.45);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: auto;
        }

        /* SECTIONS */
        .section {
            padding: 40px 20px;
            max-width: 1000px;
            margin: auto;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            margin-top: 0;
            color: #2a4d2e;
        }

        /* FOOTER */
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

    <!-- HERO -->
    <div class="hero">
        <div class="hero-content">
            <h1>Protecting Wildlife. Preserving the Future.</h1>
            <p>WildGuard is dedicated to rescuing endangered species, restoring habitats, and promoting sustainable coexistence between humans and wildlife.</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="section">
        <h2 style="text-align:center; color:#2a4d2e;">Our Core Missions</h2>

        <div class="cards">
            <div class="card">
                <h3>🐾 Wildlife Rescue</h3>
                <p>We rehabilitate injured and endangered animals, giving them a safe environment to recover and thrive.</p>
            </div>

            <div class="card">
                <h3>🌿 Habitat Restoration</h3>
                <p>Our team works to protect natural ecosystems and restore damaged wildlife habitats across the region.</p>
            </div>

            <div class="card">
                <h3>🤝 Volunteer Programs</h3>
                <p>We empower individuals to take action by joining hands-on volunteer work for conservation missions.</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        &copy; <?php echo date("Y"); ?> WildGuard Conservation. All rights reserved.
    </div>

</body>
</html>
