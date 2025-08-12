<?php
$a1 = $_GET['id'];
$con = mysqli_connect('localhost','root','suraj1','bloodbank');
$q="delete from donorregister where Donor_ID='$a1'";
$rs=mysqli_query($con,$q);
if($rs) {
    echo "Deleted Successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
?>