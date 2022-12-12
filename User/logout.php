<?php
session_start();

session_unset();

echo "<script>alert('You are logged out. Thank you for using Blood Bank Management System.')</script>";
session_destroy();

header("refresh: 0; url= ../landing page/index.php");

?>