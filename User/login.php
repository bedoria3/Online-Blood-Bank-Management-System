<?php
ob_start();
session_start();

require_once('./includes/db_connect.inc');

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = " SELECT * FROM users WHERE username = '$username' && password = '$password' ";

  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $rows = mysqli_num_rows($result);

  if ($rows == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['timeout'] = time();
    $_SESSION['logged_in'] = true;
    header("Location:home.php");

  } else {
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
} else {
  $message = "";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title> Login Page </title>


</head>

<body>
  <div class="box">
  <h2 style="margin-left: 60px; font-weight: bolder; color: red;">User's Login</h2>
    <div class="row login-tab">
      <div class="col signup link" id="signup-link">
        <h4 id="signup-heading"></h4>
      </div>
    </div>

    <div id="login-box">
      <form action="login.php" method="post" name="login" id="login-form">
        <div class="form-group">
          <input type="text" name="username" required />
          <label for="username"> Username </label>
        </div>
        <div class="form-group">
          <input type="password" id="login-pass" name="password" required />
          <i toggle="#login-pass" class="fa fa-eye toggle-password" id="toggle-login-pass"></i>
          <label for="password"> Password </label>
        </div>
        <button type="submit" name="submit"
          style="color: white; background-color: red; width: 100%; border-radius: 20px; font-size: 22px"> Login </button>
        <br><br>
        <p>Don't have an account? <a href="register.php">Register now</a></p>
        <button type="button" style="margin-left: 250px; margin-top: 20px; font-size: 15px; border-radius: 8px; padding: 3px 15px;"
            onclick="history.back();">Back</button>
      </form>
      </form>
    </div>


    <script>
      //Resetting Eye Toggle on leaving the particular box
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
      //function of validation of forms
      function validateForm() {
        alert("You are registered succesfully!");
        return true;
      }
    </script>

</body>

</html>