<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-color: #ffcccc;
        }

        /* Navigation Bar */
        .navbar {
            background-color: red;
            width: 100%;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .side1 {
            margin-left: 20px;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .side2 {
            margin-right: 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 12px 20px;
            display: inline-block;
            transition: 0.3s;
        }

        .navbar a:hover {
            background-color: darkred;
            border-radius: 5px;
        }

        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 360px;
            border-top: 6px solid red;
            margin-top: 40px;
        }

        .login-container h2 {
            color: red;
            margin-bottom: 25px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 6px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid red;
            border-radius: 8px;
            background-color: #ffe6e6;
            font-size: 16px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: red;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: darkred;
        }

        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-link a {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            color: darkred;
        }
        /* Footer */
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

body {
    flex: 1;
}

footer {
    background-color: #c20000;
    width: 100%;
    color: white;
    text-align: center;
    padding: 15px 10px;
    font-size: 14px;
    margin-top: auto; /* This pushes footer to bottom when space is available */
}
    </style>
</head>
<body>

    <!-- Navigation Bar -->
<div class="navbar">
    <div class="side1">🩸 Blood Bank Portal</div>
        <div class="side2">
            <a href="Home1.php">Home</a>
            <a href="AdminLogin.php">Admin</a>
            <a href="DonorLogin.php">Donor</a>
            <a href="PatientLogin.php">Patient</a>
        </div>
    </div>
</div>

    <!-- Login Form -->
    <div class="login-container">
        <h2>Donor Login</h2>
        <form method="get" action="">
            <div class="input-group">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="Email_ID" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="Password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="DonorRegister.php">Register here</a>
        </div>
    </div>
<!-- Footer -->
<footer>
        &copy; 2025 Blood Bank Portal | For help, contact: support@bloodbank.org
    </footer>
</body>
</html>

<?php
if (isset($_GET['Email_ID'])) {
    $a = $_GET['Email_ID'];
    $b = $_GET['Password'];

    $con = mysqli_connect('localhost', 'root', 'suraj1', 'Bloodbank');

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM donorregister WHERE Email_ID = '$a' AND Password = '$b'";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_array($result)) {

    $_SESSION['Full_Name'] = $row['Full_Name'];

    echo "<script>window.location='DonorDashboard.php'</script>";
    } else {
        echo "<script>alert('Please enter correct Email ID and Password');</script>";
    }

    mysqli_close($con);
}
?>
