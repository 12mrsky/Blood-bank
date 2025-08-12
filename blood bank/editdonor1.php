<form action="editdonor.php">
<?php
 
        
    $a = $_GET['Donor_ID'];
    $b = $_GET['Full_Name'];
    $c = $_GET['Email_ID'];
    $d = $_GET['Phone_Number'];
    $e = $_GET['Blood_Group'];

$con= mysqli_connect('localhost','root','suraj1','bloodbank');

 $a2 = "UPDATE donorregister set Full_Name  = '$b' , Email_ID = '$c', Phone_Number = '$d' , Blood_Group  = '$e' where Donor_ID = '$a'" ;

    $a2 = mysqli_query($con, query: $a2);
    if($a2){
    echo"User Updated";
    }
    else{

    echo"Invalid information";
    }

?>
</form>