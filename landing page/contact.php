<?php 

ob_start();
session_start();

require_once('./includes/db_connect.inc');


$name = $_POST["name"];    
$lastname= $_POST["surname"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$message= $_POST["message"];

$qry = "insert into contact_us (firstname,lastname,email,phone,message) values ('$name','$lastname','$email','$phone', '$message')";
$result = mysqli_query($conn,$qry); 

if($result){
    echo "<script>alert('Query Received Successfully')</script>";
    
    header("refresh: 0; url= ./index.php");
}else {
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='./index.php'> HOme</a></h3>";


}
?>