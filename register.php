<?php
ob_start();
session_start();
include_once('./includes/db_connect.inc');

if (
    isset($_SESSION['logged_in']) && isset($_SESSION['username'])
    && !empty($_SESSION['username'])
) {
    session_unset();
    header("Refresh: 0.5; url=register.php");
}
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = ($_POST['password']);
    $cfpassword = ($_POST['cpassword']);
    if ($password != "" && $cfpassword != "") {
        if ($password == $cfpassword) {
            $encrypt_password = md5($password);

            $insert_to_user_info_table_query = "insert into user_info (first_name, last_name, email, address) values ('$first_name', '$last_name', '$email', '$address')";
            $insert_result = mysqli_query($conn, $insert_to_user_info_table_query) or die("Cannot connect to the User's Information Table");

            if ($insert_result) {
                $id = mysqli_insert_id($conn);
                $insert_to_users_table_query = "insert into users (id,username, password) values ('$id','$username', '$encrypt_password ')";
                mysqli_query($conn, $insert_to_users_table_query) or die("Cannot connect to THE User's Table");
                echo '<script>alert("Registered Successfully")</script>';
            } else {
                $message = "<p>Account not created. Error in creating account</p>";
            }
        } else {
          echo '<script>alert("Your Password does not match")</script>';
        }
    }

} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title> Login Page </title>
  <link rel="stylesheet" type="text/css" href="css/login.css"> 
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 


</head>

<body>

  <div class="box">
    <br><br><br><br><br><br><br><br><br>
    <h1></h1>

    <div class="row login-tab">
      <br>
      <div class="col login link" id="login-link">
        <h4 id="login-heading">
      </div><br>
      <div class="col signup link" id="signup-link">
        <h4 id="signup-heading" style="margin-left: -140px;"> Sign Up </h4>
      </div>
    </div>

      <form action="register.php" method="post" id="signup-form">
        <div class="form-group">
        <input type="text" name="first_name" required/>
          <label for="username"> First Name </label>
        </div>
        <div class="form-group">
          <input type="text" name="last_name" required />
          <label for="username"> Last Name</label>
        </div>
        <div class="form-group">
          <input type="text" name="username" required />
          <label for="username"> Username </label>
        </div>
        <div class="form-group">
          <input type="text" name="email" required />
          <label for="username"> Email </label>
        </div>
        <div class="form-group">
          <input type="text" name="address" required />
          <label for="username"> Address </label>
        </div>
        <div class="form-group">
          <input type="password" id="signup-pass" name="password" required />
          <i toggle="#signup-pass" class="fa fa-eye toggle-password" id="toggle-signup-pass"></i>
          <label for="password"> Password </label>
        </div>
        <div class="form-group">
          <input type="password" id="confirm-pass" name="cpassword" required />
          <i toggle="#confirm-pass" class="fa fa-eye toggle-password" id="toggle-confirm-pass"></i>
          <label for="confirm-password"> Confirm Password </label>
        </div>
      
        <button type="submit" name="submit"
          style="color: white; background-color: red; width: 100%; border-radius: 5px; font-size: 22px"> Create Account </button>
          <br><br>
        <p>Already an account? <a href="login.php">Login now</a></p>
        <button type="button" style="margin-left: 250px;font-size: 15px; border-radius: 8px; padding: 3px 15px;"
            onclick="history.back();">Back</button>
        </form>
    </div> 



    <script>
  
      function resetEyeToggle(eye) {
        if (eye.hasClass('fa-eye-slash')) {
          eye.removeClass('fa-eye-slash');
          eye.addClass('fa-eye');
          var input = $(eye.attr("toggle"));
          input.attr("type", "password");
        }
      }

      //Toggle eye icon of login pass
      $('#toggle-login-pass').click(function () {
        toggleEye($(this));
      });

      //Toggle eye icon of signup pass
      $('#toggle-signup-pass').click(function () {
        toggleEye($(this));
      });

      //Toggle eye icon of confirm pass
      $('#toggle-confirm-pass').click(function () {
        toggleEye($(this));
      });

      //function TO toggle EYE ICON of passwords
      function toggleEye(eye) {
        eye.toggleClass("fa-eye fa-eye-slash");
        var input = $(eye.attr("toggle"));
        if (eye.hasClass("fa-eye-slash")) {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      }
      //function to the validation of forms
      function validateForm() {
      
        return true;
      }
  
    </script>
   
</body>

</html>