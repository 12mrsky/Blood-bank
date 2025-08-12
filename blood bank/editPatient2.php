<?php

$a = $_GET['Patient_id'];
$b = $_GET['Patient_Name'];
$c = $_GET['Patient_Email'];
$d = $_GET['Phone_Number'];
$con= mysqli_connect('localhost','root','suraj1','bloodbank');

 echo $a1 = "UPDATE patientregister set Patient_Name  = '$b' , Patient_Email = '$c', Phone_Number = '$d'where Patient_id = '$a'" ;

    $a2 = mysqli_query(mysql: $con, query: $a1);
    if($a1){
    echo"User Updated";
    }
    else{

    echo"Invalid information";
    }
?>
