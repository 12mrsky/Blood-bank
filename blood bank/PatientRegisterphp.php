<?php
$a1 = $_GET['Patient_id'];
$a = $_GET['Patient_Name'];
$b= $_GET['Patient_Email'];
$c= $_GET['Password'];
$d= $_GET['Phone_Number'];
$con = mysqli_connect('localhost', 'root', 'suraj1', 'Bloodbank');
 $query = "SELECT * FROM PatientRegister WHERE Patient_Email = '$b'";
$result = mysqli_query($con, $query);
if ($row = mysqli_fetch_array($result)) 
{
    echo "Already Available";
} 
else {
   $query = "INSERT INTO PatientRegister(Patient_id,Patient_Name, Patient_Email, Password, Phone_Number) VALUES ('$a1','$a', '$b', '$c', '$d'    )";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Registration Successful');</script>";
        echo "<script>window.location='PatientLogin.php';</script>";
    } else {
        echo "Invalid Information. Please Check Again.";
    }
}
mysqli_close($con);

?>