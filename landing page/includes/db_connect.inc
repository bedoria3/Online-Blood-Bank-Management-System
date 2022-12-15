<?php

$conn = mysqli_connect("localhost", "root","") or die("Cannot connect to localhost");
mysqli_select_db($conn, "blood_bank") or die("Cannot connect to blood bank database");

?>