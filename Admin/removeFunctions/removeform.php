<?php

ob_start();
session_start();

require_once('../includes/db_connect.inc');

if(isset($_GET['donation_ID'])){
    
$id=$_GET['donation_ID'];
$qry="delete from donations_file where donation_ID=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:./remove_donor.php');
}else{
    echo"ERROR!!";
}
}
?>
