<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Portal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: linear-gradient(135deg, #ffe6e6, #ffcccc);
        }

        /* Navbar */
        .navbar {
            background-color: #c20000;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .navbar .logo {
            font-size: 28px;
            font-weight: bold;
        }

        .navbar .menu a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 18px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar .menu a:hover {
            background-color: darkred;
        }

        /* Main Content */
        .content {
            flex: 1;
            padding: 60px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content h1 {
            font-size: 40px;
            color: #b30000;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 20px;
            max-width: 800px;
            line-height: 1.6;
            color: #333;
        }

        /* Sections */
        .sections {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 280px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h3 {
            margin-bottom: 15px;
            color: #c20000;
            font-size: 24px;
        }

        .card p {
            font-size: 16px;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #c20000;
            color: white;
            text-align: center;
            padding: 15px 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">🩸 Blood Bank Portal</div>
        <div class="menu">
            <a href="#">Home</a>
            <a href="AdminLogin.php">Admin</a>
            <a href="DonorLogin.php">Donor</a>
            <a href="PatientLogin.php">Patient</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to the Blood Bank Management System</h1>
        <p>
            Our mission is to ensure easy access to blood donations and fulfill patient needs quickly and reliably.
        </p>

        <div class="sections">
            <div class="card">
                <h3>Admin Panel</h3>
                <p>Manage users, oversee donation records, and ensure smooth system operations securely.</p>
            </div>
            <div class="card">
                <h3>Donor Access</h3>
                <p>Register availability, view donation history, and stay informed about upcoming drives.</p>
            </div>
            <div class="card">
                <h3>Patient Portal</h3>
                <p>Request blood, track statuses, and locate available donors in nearby hospitals or regions.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2025 Blood Bank Portal | For help, contact: support@bloodbank.org
       <p> Designed by [Suraj Yadu]</p>
    </footer>

</body>
</html>
