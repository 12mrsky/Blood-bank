<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Approve Blood Requests</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f3f3f3;
      margin: 0;
    }

    h2 {
      color: #c20000;
      text-align: center;
      margin: 30px 0;
    }

    /* Navigation Bar */
    .navbar {
      background-color: red;
      width: 100%;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .side1 {
      font-size: 24px;
      font-weight: bold;
      color: white;
    }

    .side2 a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      padding: 12px 15px;
      display: inline-block;
      transition: 0.3s;
    }

    .side2 a:hover {
      background-color: darkred;
      border-radius: 5px;
    }

    .table-container {
      width: 100%;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      overflow-x: auto;
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 900px;
    }

    th, td {
      padding: 12px 16px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: red;
      color: white;
    }

    .actions button {
      padding: 6px 12px;
      margin: 4px;
      font-size: 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .accept {
      background-color: green;
      color: white;
    }

    .decline {
      background-color: darkred;
      color: white;
    }

    .actions button:hover {
      opacity: 0.9;
    }

    @media (max-width: 600px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        position: sticky;
        top: 0;
      }

      td {
        text-align: right;
        padding-left: 50%;
        position: relative;
      }

      td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        padding-left: 16px;
        font-weight: bold;
        color: #555;
        text-align: left;
      }
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="side1">🩸 Blood Bank Portal</div>
    <div class="side2">
      <a href="AdminDashboard.php">Dashboard</a>
      <a href="listofallDonors.php">Donor's</a>
      <a href="listofallpatients.php">Patient's</a>
      <a href="#">Donation's</a>
      <a href="RequestA&D.php">Request's</a>
      <a href="Home1.php">Logout</a>
    </div>
  </div>

  <h2>Admin - Blood Request Approvals</h2>

  <?php
$conn = mysqli_connect("localhost", "root", "suraj1", "bloodbank");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}       
$id=$_GET["id"];        
 $sql = "update RequestFrom set status='accept' where patientName='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Accepted";
} else {
    echo "Erro";
}
mysqli_close($conn);

            ?>
            
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
