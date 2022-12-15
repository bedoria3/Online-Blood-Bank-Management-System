<?php

ob_start();
session_start();

require_once('../includes/db_connect.inc');

if(isset($_GET['donation_ID'])){
    
$id=$_GET['donation_ID'];
$bloodid= $_GET['blood_id'];

$qry="delete from donations_file where donation_ID=$id";
$result=mysqli_query($conn,$qry);

if ( $blood_type == 'O+') {
    $query = "delete into `blood_o_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
    $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
    echo "<script>alert('Successfully Added')</script>";
    header("refresh: 0; url= ../managedonor.php");

} else {
    $message ="<p>Not added in the database</p>";
}

if($result){
    echo"DELETED";
    header('Location:./remove_donor.php');
}else{
    echo"ERROR!!";
}
}
?>
