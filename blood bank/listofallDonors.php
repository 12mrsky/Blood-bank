<?php
// Connect to MySQL
$con = mysqli_connect('localhost', 'root', 'suraj1', 'bloodbank');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch data
$q = "SELECT * FROM donorregister";
$rs = mysqli_query($con, $q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Donor List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
            background: #f5f5f5;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
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


        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            color: white;
            text-decoration: none;
            margin: 2px;
            display: inline-block;
        }

        .edit {
            background-color: #28a745;
        }

        .delete {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
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
        $a=$_SESSION['UserName'];
echo "<h3>Welcome, $a</h3>";
?>
        <div class="side2">
            <a href="AdminDashboard.php">Dashboard</a>
            <a href="listofallDonors.php">Donor's</a>
            <a href="listofallpatients.php">Patient's</a>
            <a href="#">Donation's</a>
            <a href="RequestA&D.php">Request's</a>
            <a href="Home1.php">Logout</a>
        </div>
    </div>


    <h2>List Of All Donors's</h2>

    <table>
        <thead>
            <tr>
                <th>Donor_ID</th>
                <th>Full_Name</th>
                <th>Email_ID</th>
                <th>Phone_Number</th>
                <th>Blood_Group</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($rs) > 0) {
                while ($row = mysqli_fetch_array($rs)) {
                    echo "<tr>
                        <td>{$row['Donor_ID']}</td>
                        <td>{$row['Full_Name']}</td>
                        <td>{$row['Email_ID']}</td>
                        <td>{$row['Phone_Number']}</td>
                        <td>{$row['Blood_Group']}</td>
                        <td>
                            <a href='editdonor.php?id={$row['Donor_ID']}' class='btn edit'>Edit</a>
                            <a href='DeleteDonor.php?id={$row['Donor_ID']}' class='btn delete' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>

</body>
</html>
