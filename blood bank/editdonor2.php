<?php

$a = $_GET['Donor_ID'];
$b = $_GET['Full_Name'];
$c = $_GET['Email_ID'];
$d = $_GET['Phone_Number'];
$e = $_GET['Blood_Group'];

$con= mysqli_connect('localhost','root','suraj1','bloodbank');

 echo $a1 = "UPDATE donorregister set Full_Name  = '$b' , Email_ID = '$c', Phone_Number = '$d', Blood_Group = '$e' where Donor_ID = '$a'" ;

    $a2 = mysqli_query(mysql: $con, query: $a1);
    if($a1){
    echo"User Updated";
    }
    else{

    echo"Invalid information";
    }
?>
