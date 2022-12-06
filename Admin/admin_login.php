<?php
ob_start();
session_start();

require_once('includes/db_connect.inc');

if (isset($_POST['submit'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = " SELECT * FROM admin_file WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
   $rows = mysqli_num_rows($result);

   if ($rows == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['timeout'] = time();
      $_SESSION['logged_in'] = true;
      header("Location:admin_dashboard.php");

   } else {
      $message = "";
      echo "<script type='text/javascript'>alert('Username and/or Password incorrect.\\nTry again.');</script>";
   }
} else {
   $message = "";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="stylesheet" href="Login_Register.css">

</head>

<body>

   <div class="form-container">
   <?=$message?>
      <form action="" method="post">
         <h3>Admin's Login Form</h3>
         <input type="username" name="username" required placeholder="Username">
         <input type="password" name="password" required placeholder="Password">
         <input type="submit" name="submit" value="Login" class="form-btn">
         <button type="button" style="margin-left: 290px; font-size: 15px; padding: 3px 15px;" onclick="history.back();">Back</button>
      </form>
   </div>

</body>

</html>