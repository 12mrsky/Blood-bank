<?php
$a1 = $_GET['Donor_ID'];
$a = $_GET['Full_Name'];
$b= $_GET['Email_ID'];
$c= $_GET['Phone_Number'];
$d= $_GET['Blood_Group'];
$e= $_GET['Password'];
$con = mysqli_connect('localhost', 'root', 'suraj1', 'Bloodbank');
$query = "SELECT * FROM Donorregister WHERE Email_ID = '$b'";
$result = mysqli_query($con, $query);
if ($row = mysqli_fetch_array($result)) 
{
    echo "Already Available";
} 
else {
    echo $query = "INSERT INTO Donorregister(Donor_ID,Full_Name, Email_ID, Phone_Number, Blood_Group, Password) VALUES ('$a1','$a', '$b', '$c', '$d', '$e')";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Registration Successful');</script>";
        echo "<script>window.location='DonorLogin.php';</script>";
    } else {
        echo "Invalid Information. Please Check Again.";
    }
}
mysqli_close($con);

?>