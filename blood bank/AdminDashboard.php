<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        /* Container */
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            height: 500px;
            max-width: 1200px;
            border-top: 5px solid red;
            margin: 50px auto;
        }

        h2 {
            color: red;
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .blood-box {
            background-color:rgb(250, 245, 245);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blood-box:hover {
            transform: translateY(-5px);
            background-color: #f8d7da;
        }

        .blood-box h1 {
            font-size: 32px;
            color: red;
            margin-bottom: 10px;
        }

        .blood-box p {
            font-size: 16px;
            color: #333;
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .side2 {
                margin-top: 10px;
                margin-right: 0;
            }
        }
        h3 {
            color: white;
            font-size: 20px;
        }
        
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
  
        <div class="side1">🩸 Blood Bank Portal</div>
        <?php
session_start();    
if(isset($_SESSION['UserName']) ) {
    // User is logged in
  } else {
    // Redirect to login page or show an error message
    header("Location: AdminLogin.php");
    exit();
  }
  // Display the welcome message
  
$a=$_SESSION['UserName'];
echo "<h3>Welcome, $a</h3>";
?>
        <div class="side2">
            <a href="AdminDashboard.php">Dashboard</a>
            <a href="listofallDonors.php">Donor's</a>
            <a href="listofallpatients.php">Patient's</a>
            <a href="Donation's.php">Donation's</a>
            <a href="RequestA&D.php">Request's</a>
            <a href="Home1.php">Logout</a>
        </div>
    </div>

    <!-- Admin Dashboard -->
    <div class="container">
        <h2>Admin Dashboard</h2>
        <div class="grid">
            <div class="blood-box"><h1>A</h1><p>Blood Available</p><p>Total: 
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations where Blood_Group='A'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
            </p></div>
            <div class="blood-box"><h1>A+</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations WHERE Blood_Group = 'A+'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>A-</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT sum(Number_of_Units) as count FROM donations WHERE Blood_Group = 'A-'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>B</h1><p>Blood Available</p><p>Total: 
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'B'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
            </p></div>
            <div class="blood-box"><h1>B+</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'B+'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>B-</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'B-'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>AB+</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'AB+'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>AB-</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'AB-'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>O+</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'O+'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
            <div class="blood-box"><h1>O-</h1><p>Blood Available</p><p>Total:
                <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(Number_of_Units) as count FROM donations WHERE Blood_Group = 'O-'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?> </p></div>
        </div>
    </div>

</body>
</html>
