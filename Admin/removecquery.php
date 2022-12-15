<?php

ob_start();
session_start();

require_once('./includes/db_connect.inc');

if(isset($_GET['id'])){
    
$id=$_GET['id'];
$qry="delete from contact_us where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:./managecquery.php');
}else{
    echo"ERROR!!";
}
}
?>
