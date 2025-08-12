<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Blood Donation Request</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f2f2f2;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .navbar {
      background-color: red;
      width: 100%;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
      font-size: 22px;
      color: white;
      font-weight: bold;
    }

    .navbar .nav-links a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
      font-size: 16px;
      transition: 0.3s;
    }

    .navbar .nav-links a:hover {
      background-color: darkred;
      padding: 8px 12px;
      border-radius: 5px;
    }

    .request-form {
      background-color: #fff;
      margin-top: 40px;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
    }

    .request-form h2 {
      text-align: center;
      color: #c20000;
      margin-bottom: 25px;
    }

    .form-group {
      margin-bottom: 18px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #333;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #c20000;
      color: #fff;
      border: none;
      font-size: 18px;
      border-radius: 6px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #a80000;
    }

    @media (max-width: 600px) {
      .request-form {
        padding: 20px;
      }

      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar .nav-links {
        margin-top: 10px;
      }

      .navbar .nav-links a {
        margin: 5px 0;
        display: block;
      }
    }
    h3 {
      color: white;
      margin-left: 20px;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="logo">🩸 Blood Bank Portal</div>
    
    <?php
            
// Display the welcome message
$a=$_SESSION['Patient_Name'];
echo "<h3>Welcome, $a</h3>";
    ?>
    <div class="nav-links">
      <a href="PatientDashboard.php">Dashboard</a>
      <a href="Request.php">Request Blood</a>
      <a href="#">Request History</a>
      <a href="PatientLogin.php">Logout</a>
    </div>
  </div>

  <!-- Request Form -->
  <div class="request-form">
    <h2>Blood Donation Request Form</h2>
    <form action="" method="get">
      <div class="form-group">
        <label for="patientName">Patient Name</label>
        <input type="text" id="patientName" name="patientName" required>
      </div>

      <div class="form-group">
        <label for="bloodGroup">Required Blood Group</label>
        <select id="bloodGroup" name="bloodGroup" required>
          <option value="">--Select--</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div>

      <div class="form-group">
        <label for="units">Number of Units</label>
        <input type="number" id="units" name="units" min="1" required>
      </div>

      <div class="form-group">
        <label for="hospital">Hospital Name</label>
        <input type="text" id="hospital" name="hospital" required>
      </div>

      <div class="form-group">
        <label for="location">Location / City</label>
        <input type="text" id="location" name="location" required>
      </div>

      <div class="form-group">
        <label for="contact">Contact Number</label>
        <input type="text" id="contact" name="contact" required>
      </div>

      <div class="form-group">
        <label for="message">Additional Message (Optional)</label>
        <textarea id="message" name="message" placeholder="Any special requirements or notes..."></textarea>
      </div>

      <button type="submit">Submit Request</button>
    </form>
  </div>

</body>
</html>

<?php
if (isset($_GET['patientName'])) {
    $patientName = $_GET['patientName'];
    $bloodGroup = $_GET['bloodGroup'];
    $units = $_GET['units'];
    $hospital = $_GET['hospital'];
    $location = $_GET['location'];
    $contact = $_GET['contact'];
    $message = $_GET['message'];

    // Database connection
    $conn = mysqli_connect('localhost', 'root', 'suraj1', 'bloodbank');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert request into database
    $sql = "INSERT INTO RequestFrom (patientName, bloodGroup, units, hospital, location, contact, message)
    VALUES ('$patientName', '$bloodGroup', '$units', '$hospital', '$location', '$contact', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Request submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}
?>
