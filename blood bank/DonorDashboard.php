<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blood Donation Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #ffcccc;
      min-height: 100vh;
    }

    .navbar {
      background-color: red;
      width: 100%;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .logo {
      font-size: 22px;
      color: white;
      font-weight: bold;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
      font-size: 16px;
      transition: 0.3s;
    }

    .navbar a:hover {
      background-color: darkred;
      padding: 8px 12px;
      border-radius: 5px;
    }

    .dashboard-container {
      max-width: 1300px;
      height:550px;
      margin: 40px auto;
      padding: 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      border-top: 6px solid red;
    }

    .dashboard-title {
      text-align: center;
      color: red;
      margin-bottom: 30px;
      font-size: 28px;
    }

    .status-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
      text-align: center;
    }

    .status-box {
      background-color: #ffe6e6;
      padding: 25px;
      border: 2px solid red;
      border-radius: 12px;
      transition: 0.3s;
    }

    .status-box:hover {
      background-color: #ffb3b3;
      transform: translateY(-5px);
    }

    .status-box h3 {
      font-size: 20px;
      color: darkred;
      margin-bottom: 10px;
    }

    .status-box p {
      font-size: 24px;
      color: #333;
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

    

    <div class="logo">🩸 Blood Bank Portal</div>
    <?php
session_start();    
if(isset($_SESSION['Full_Name']) ) {
  // User is logged in
} else {
  // Redirect to login page or show an error message
  header("Location: DonorLogin.php");
  exit();
}
// Display the welcome message

$a=$_SESSION['Full_Name'];
echo "<h3>Welcome, $a</h3>";
?>
    <div>
      <a href="DonorDashboard.php">Dashboard</a>
      <a href="BloodDonationForm.php">Donate</a>
      <a href="#">Request</a>
      <a href="Certificate.php">Print Certificate</a>
      <a href="DonorLogin.php">Logout</a>
    </div>
  </div>

  <!-- Dashboard -->
  <div class="dashboard-container">
    <div class="dashboard-title">Blood Donate Dashboard</div>

    <div class="status-grid">
      <div class="status-box">
        <h3>Blood Donated</h3>
        <p>Total:
          <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations where status='Accept' ";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
        </p>
      </div>
      <div class="status-box">
        <h3>Total Requests</h3>
        <p>Total:
          <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
        </p>
      </div>
      <div class="status-box">
        <h3>Request Pending</h3>
        <p>Total:
          <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations  where status='Pending'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
        </p>
      </div>
      <div class="status-box">
        <h3>Request Accepted</h3>
        <p>Total:
          <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations  where status='Accept'" ;
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
        </p>
      </div>
      <div class="status-box">
        <h3>Request Rejected</h3>
        <p>Total:
          <?php
            $con = mysqli_connect('localhost','root','suraj1','bloodbank');   
          if (!$con) {
              die("Connection failed: ".mysqli_connect_error());
          }
          $sql = "SELECT COUNT(*) as count FROM donations  where status='Reject'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          $totalAccepted = $row['count'];
          echo $totalAccepted;
          mysqli_close($con);
          ?>
        </p>
      </div>
    </div>
  </div>

</body>
</html>
