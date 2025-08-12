<form action="editpatient.php">
<?php

        
    $a = $_GET['Patient_id'];
    $b = $_GET['Patient_Name'];
    $c = $_GET['Patient_Email'];
    $d = $_GET['Phone_Number'];

$con= mysqli_connect('localhost','root','suraj1','bloodbank');

 $a2 = "UPDATE patientregister set Patient_Name  = '$b' , Patient_Email = '$c', Phone_Number = '$d' where Patient_id = '$a'" ;

    $a2 = mysqli_query($con, query: $a2);
    if($a2){
    echo"User Updated";
    }
    else{

    echo"Invalid information";
    }

?>
</form>