<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
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
            background-color: #ffcccc; /* Light red background */
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

        .register-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 420px;
            text-align: center;
            border-top: 6px solid red;
            margin-top: 15px;
        }

        .register-container h2 {
            color: red;
            margin-bottom: 25px;
        }

        .input-group {
            margin-bottom: 18px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 6px;
        }

        .input-group input,
        .input-group select {
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
            margin-top: 10px;
        }

        .btn:hover {
            background-color: darkred;
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }

        .login-link a:hover {
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
    margin-top: 20px; /* This pushes footer to bottom when space is available */
}

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="side1">Blood Donation Portal</div>
        <div class="side2">
            <a href="Home1.php">Home</a>
            <a href="AdminLogin.php">Admin</a>
            <a href="Donorlogin.php">Donor</a>
            <a href="PatientLogin.php">Patient</a>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="register-container">
        <h2>Patient Registration</h2>
        <form action="PatientRegisterphp.php">
        <div class="input-group">
            
                <label for="Patient_id">Patient ID</label>
                <input type="text" id="Patient_id" name="Patient_id" placeholder="Enter Patient ID" required>
            </div>

            <div class="input-group">
                <label for="name">Patient Name</label>
                <input type="text" id="name" name="Patient_Name" placeholder="Enter your full name" required>
            </div>

            <div class="input-group">
                <label for="email">Patient Email </label>
                <input type="email" id="email" name="Patient_Email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Create Password</label>
                <input type="password" id="password" name="Password" placeholder="Enter password" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="Phone_Number" placeholder="Enter your phone number" required>
            </div>

            <button type="submit" class="btn">Register</button>

        </form>

        <div class="login-link">
            Already registered? <a href="PatientLogin.php">Login here</a>
        </div>
    </div>
            <!-- Footer -->
            <footer>
        &copy; 2025 Blood Bank Portal | For help, contact: support@bloodbank.org
    </footer>

</body>
</html>
