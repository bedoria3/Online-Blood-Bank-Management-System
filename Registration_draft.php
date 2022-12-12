<?php
@include 'dbconnect.php';

if(isset($_POST['submit'])){

   $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);

   $select = " SELECT * FROM registration WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT into `registration` (fullname,username,email_address, password)
         VALUES ('$fullname','$username', '$email','$pass')";
         $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));
         $rows = mysqli_num_rows($result);
         header('location:user_login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="user.css">
<style>
   body{
      background-image: linear-gradient(to right, red , white);
   }
</style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Registration Form</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="fullname" required placeholder="Full Name">
      <input type="username" name="username" required placeholder="Username">
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Password">
      <input type="password" name="cpassword" required placeholder="Re-type Password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="user_login.php">Login now</a></p>
   </form>

</div>

</body>
</html>