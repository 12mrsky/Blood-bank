<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

        .box h1 {
            font-size: 26px;
            color: red;
            margin-bottom: 10px;
            padding-top:10px ;
        }
        .register-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 420px;
            text-align: center;
            border-top: 8px solid red;
            margin-top: 10px;
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
        h1 {
            margin-left: 100px;
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


</style>
<body>
      <!-- Navigation Bar -->
      <div class="navbar">
        <div class="side1">🩸 Blood Bank Portal</div>
        <div class="side2">
            <a href="AdminDashboard.php">Dashboard</a>
            <a href="listofallDonors.php">Donor's</a>
            <a href="listofallpatients.php">Patient's</a>
            <a href="#">Donation's</a>
            <a href="#">Request's</a>
            <a href="Home1.php">Logout</a>
        </div>
    </div>
<?php
        
        $a = $_GET['id'];
        $con = mysqli_connect('localhost','root','suraj1','bloodbank');
       $q = "SELECT * FROM donorregister where Donor_ID ='$a'";
        $rs = mysqli_query($con, $q);
        $row = mysqli_fetch_array($rs);
        ?>
<form action="editdonor1.php" method="GET">
        <div class="box">
            <h1>👨 Edit Donor</h1>
                        
            <div class="register-container">

        <h2>Donor Update Form</h2>
        <form >
        
            <div class="input-group">
                <label for="Donor_ID">Donor ID</label>
                <input type="text" id="Donor_ID" name="Donor_ID" value="<?php echo $row['Donor_ID']  ?>" placeholder="Enter Donor ID" required>
            </div>

            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="Full_Name" value="<?php echo $row['Full_Name']  ?>" placeholder="Enter your full name" required>
            </div>

            <div class="input-group">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="Email_ID" value="<?php echo $row['Email_ID']  ?>"  placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="Phone_Number"value="<?php echo $row['Phone_Number']  ?>" placeholder="Enter your phone number" required>
            </div>

            <div class="input-group">
                <label for="blood_group">Blood Group</label>
                <select id="blood_group" name="Blood_Group" value="<?php echo $row['Blood_Group']  ?>" required>
                    <option value="">-- Select Blood Group --</option>
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
            <button type="submit" class="btn">UPDATE</button>
        </div>  
    </form>


</body>
</html>
<?php
