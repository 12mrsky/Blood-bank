<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            background-color: #c20000;
            border-radius: 5px;
        }

        .login-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
            border-top: 5px solid #c20000;
            margin-top: 40px;
        }

        h2 {
            color: #c20000;
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
            border: 1px solid #c20000;
            font-size: 16px;
            outline: none;
            background: #ffe6e6;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #c20000;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background: red;
        }

        .register-section {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-section a {
            color: red;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .register-section a:hover {
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
        <h2>Admin Login</h2>
        <form>
            <div class="input-box">
                <label for="email">Email ID</label>
                <input type="Email" id="Email" name="email" placeholder="Enter Email ID" required>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="register-section">
            Don't have an account? <a href="AdminRegister.php">Register</a>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        &copy; 2025 Blood Bank Portal | For help, contact: support@bloodbank.org
    </footer>


</body>
</html>
<?php
        if(isset($_GET['email'])){
            $a=$_GET['email'];
            $b=$_GET['password'];

        $con = mysqli_connect('localhost', 'root', 'suraj1', 'Bloodbank');

      $query = "SELECT * FROM AdminRegister WHERE EmailID = '$a' and password='$b'";
        $result = mysqli_query($con, $query);

             
            if ($row = mysqli_fetch_array($result)) {
                    
            $_SESSION['UserName'] =  $row['UserName'];
        
                echo "<script>window.location='AdminDashboard.php'</script>";
            }
        else {
            echo "Please Enter Correct Email ID and Password";
        }
        
    }
        ?>
