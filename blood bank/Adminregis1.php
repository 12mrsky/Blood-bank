<?php
    $a = $_GET['AdminID'];
    $b = $_GET['UserName'];
    $c = $_GET['EmailID'];
    $d = $_GET['Password'];
    $con= mysqli_connect('localhost','root','suraj1','Bloodbank');
    $q = "select * from AdminRegister where AdminID= '$a'";
    $rs=mysqli_query($con,$q);
if($row = mysqli_fetch_array($rs))
{
    echo "Already Available";
}
else{
$a1 = "insert into AdminRegister values ('$a','$b','$c','$d')";
$a2 = mysqli_query($con, query: $a1);
if($a2) 
echo "Registeration Successful";
else
    echo "Invalid Information Please Check Again";
}
