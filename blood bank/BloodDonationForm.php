<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Donation Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
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


        /* Container */
        .container {
            display: flex;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
            margin: 40px auto;
            max-width: 900px;
            width: 100%;
        }

        /* Form Section */
        .form-section {
            flex: 1;
            padding: 40px;
        }

        .form-section h2 {
            margin-bottom: 20px;
            color: #dc3545;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        select,
        input[type="number"],
        input[type="text"],
        textarea {
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
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #c82333;
        }

        /* Image Section */
        .image-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffe6e6;
            padding: 20px;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .image-section {
                padding: 20px 0;
            }
        }
        h3 {
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>
<form action="">
<!-- Navigation Bar -->
<div class="navbar">

    

<div class="logo">🩸 Blood Bank Portal</div>
<?php 
        session_start();        
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
<!-- Main Container -->
<div class="container">
    <!-- Form Section -->

    <div class="form-section">
            <h2>Blood Donation Form</h2>
            

            <div class="form-group">
                <label for="units">Full_Name</label>
                <input type="text" name="Full_Name" id="Full_Name" required>
            </div>

        <form action="submit_donation.php">
            <div class="form-group">
                <label for="bloodGroup">Blood Group</label>
                <select name="Blood_Group" id="bloodGroup" required>
                    <option value="">Select Blood Group</option>
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
                <input type="number" name="Number_of_Units" id="units" min="1" required>
            </div>

            <div class="form-group">
                <label for="disease">Disease (if any)</label>
                <textarea name="disease" id="disease" placeholder="Mention any disease, or write 'None'"></textarea>
            </div>
            </form>
            <button type="submit">Submit</button>
        
    </div>

    <!-- Image Section -->
    <div class="image-section">
        <img src="IQKrrYI3nqo0i9PNqO7W.jpg" alt="Blood Donation">
    </div>
</div>
</form>
</body>
</html>
<?php
// submit_donation.php
if(isset($_GET['Full_Name'])) {
    $a = $_GET['Full_Name'];
    $b = $_GET['Blood_Group'];
    $c = $_GET['Number_of_Units'];
    $d = $_GET['disease'];

    // Database connection
    $conn = new mysqli('localhost', 'root', 'suraj1', 'bloodbank');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO Donations  VALUES ('$a','$b', '$c', '$d')";
    if ($conn->query($sql) === TRUE) {
        echo "Donation recorded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>