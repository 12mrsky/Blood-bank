<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blood Donor Certificate</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      font-family: 'Georgia', serif;
      background: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    /* Navbar Styles */
    .navbar {
      background-color: red;
      width: 100%;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
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
      padding: 12px 20px;
      display: inline-block;
      transition: 0.3s;
    }

    .side2 a:hover {
      background-color: darkred;
      border-radius: 5px;
    }

    /* Certificate Styles */
    .certificate {
      border: 10px solid #e74c3c;
      padding: 40px;
      width: 800px;
      margin: auto;
      background: #fff;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      position: relative;
    }

    .certificate h1 {
      text-align: center;
      color: #c0392b;
      font-size: 40px;
      margin-bottom: 10px;
    }

    .certificate h2 {
      text-align: center;
      font-size: 24px;
      color: #333;
    }

    .certificate p {
      font-size: 18px;
      line-height: 1.6;
      text-align: center;
      margin: 40px 0;
    }

    .certificate .footer {
      display: flex;
      justify-content: space-between;
      margin-top: 60px;
    }

    .certificate .footer div {
      text-align: center;
    }

    .certificate .footer .date,
    .certificate .footer .signature {
      width: 45%;
    }

    .logo {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 80px;
    }

    .print-button {
      display: block;
      margin: 20px auto;
      background-color: #e74c3c;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .print-button:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="side1">Blood Donation Portal</div>
    <div class="side2">
      <a href="DonorDashboard.php">Dashboard</a>
      <a href="BloodDonationForm.php">Donate</a>
      <a href="#">Request</a>
      <a href="Certificate.php">Print Certificate</a>
      <a href="DonorLogin.php">Logout</a>
    </div>
  </div>

  <!-- Certificate -->
  <div class="certificate">
    <img src="pngwing.com.png" alt="Blood Drop Logo" class="logo">
    <h1>Certificate of Appreciation</h1>
    <h2>Blood Donor Recognition</h2>
    <p>
      This is to proudly certify that 
      <strong><?php echo $_SESSION['Full_Name']; ?></strong><br>
      has voluntarily donated blood and contributed to saving lives.<br>
      Your selfless act is deeply appreciated.
    </p>
    <div class="footer">
      <div class="date">
        <?php echo date("F j, Y"); ?><br>
        _______________________<br>
        Date
      </div>
      <div class="signature">
        <img src="signature-40122.png" width="120px"><br>
        Authorized Signature
      </div>
    </div>
  </div>

  <!-- Print Button -->
  <button class="print-button" onclick="window.print()">Print Certificate</button>

</body>
</html>
