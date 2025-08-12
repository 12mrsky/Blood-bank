<?php
// Connect to MySQL
$con = mysqli_connect('localhost', 'root', 'suraj1', 'bloodbank');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donations List - Admin</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #c62828;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      color: white;
    }

    .side1 {
      font-size: 24px;
      font-weight: bold;
    }

    .side2 a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
      transition: background 0.3s, padding 0.3s;
      padding: 8px 12px;
      border-radius: 4px;
    }

    .side2 a:hover {
      background-color: #b71c1c;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-top: 30px;
    }

    .table-container {
      max-width: 1100px;
      margin: 30px auto;
      background: white;
      border-radius: 10px;
      overflow-x: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 14px 18px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #d32f2f;
      color: white;
      font-size: 16px;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    .actions button {
      padding: 8px 16px;
      margin: 5px 4px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .accept {
      background-color: #388e3c;
      color: white;
    }

    .accept:hover {
      background-color: #2e7d32;
    }

    .decline {
      background-color: #e53935;
      color: white;
    }

    .decline:hover {
      background-color: #c62828;
    }

    h3 {
      margin-left: 30px;
      font-size: 18px;
      color: #fff;
    }

    @media (max-width: 768px) {
      .side2 a {
        display: block;
        margin: 10px 0;
      }

      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      h3 {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<div class="navbar">
  <div class="side1">🩸 Blood Bank Portal</div>
  <?php 
    session_start();        
    $a = $_SESSION['UserName'];
    echo "<h3>Welcome, $a</h3>";
  ?>
  <div class="side2">
    <a href="AdminDashboard.php">Dashboard</a>
    <a href="listofallDonors.php">Donors</a>
    <a href="listofallpatients.php">Patients</a>
    <a href="Donation's.php">Donations</a>
    <a href="RequestA&D.php">Requests</a>
    <a href="Home1.php">Logout</a>
  </div>
</div>

<h2>List of All Donations</h2>

<div class="table-container">
  <table>
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Blood Group</th>
        <th>Units</th>
        <th>Disease</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = mysqli_connect("localhost", "root", "suraj1", "bloodbank");
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT * FROM donations";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['Full_Name'] . "</td>";
              echo "<td>" . $row['Blood_Group'] . "</td>";
              echo "<td>" . $row['Number_of_Units'] . "</td>";
              echo "<td>" . $row['disease'] . "</td>";
              echo "<td class='actions'>";
              echo "<a href='accept.php?id=" . urlencode($row['Full_Name']) . "'><button class='accept'>Accept</button></a>";
              echo "<button class='decline'>Decline</button>";
              echo "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='5'>No donation records found</td></tr>";
      }
      mysqli_close($conn);
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
