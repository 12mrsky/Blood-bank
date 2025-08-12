<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
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
            background-color: #c20000;
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
            background-color: #c20000;
            border-radius: 5px;
        }

        /* Registration Form */
        .register-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
            border-top: 5px solid ;
            margin: 50px auto;
        }

        h2 {
            color: red;
            margin-bottom: 20px;
        }

        .input-box {
            margin: 15px 0;
            text-align: left;
        }

        .input-box label {
            display: block;
            color: black;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .input-box input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid red;
            font-size: 16px;
            outline: none;
            background: #ffe6e6;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: red;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background: darkred;
        }

        .login-section {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-section a {
            color: red;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .login-section a:hover {
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
    

    <!-- Navigation Bar -->
     <div class="navbar">
     <div style="font-size: 24px; font-weight: bold; color: white;" class="side1">🩸 Blood Bank Portal</div>

    <div class="side2">
        <a href="Home1.php">Home</a>
        <a href="AdminLogin.php">Admin</a>
        <a href="DonorLogin.php">Donor</a>
        <a href="Patientlogin.php">Patient</a>
    </div>
    </div>
    <!-- Registration Form -->
    <div class="register-container">
        <h2>Admin Registration</h2>

        <form action="Adminregis1.php">
            <div class="input-box">
                <label for="admin-id">Admin ID</label>
                <input type="text" id="admin-id" name="AdminID" placeholder="Enter Admin ID" required>
            </div>

            <div class="input-box">
                <label for="username">Username</label>
                <input type="text" id="username" name="UserName" placeholder="Enter Username" required>
            </div>

            <div class="input-box">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="EmailID" placeholder="Enter Email ID" required>
            </div>

            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="Password" placeholder="Enter Password" required>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>

        <div class="login-section">
            Already have an account? <a href="AdminLogin.php">Login</a>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        &copy; 2025 Blood Bank Portal | For help, contact: support@bloodbank.org
    </footer>

</body>
</html>
