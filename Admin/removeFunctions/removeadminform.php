<?php

ob_start();
session_start();

require_once('../includes/db_connect.inc');

if(isset($_GET['admin_id'])){
    
$id=$_GET['admin_id'];
$qry="delete from admin_file where admin_id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:./remove_admin.php');
}else{
    echo"ERROR!!";
}
}
?>
