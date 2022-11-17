<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Blood Bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once('dbconnect.php');

    if (isset($_REQUEST['fullname'])) {

        $full_name = stripslashes($_REQUEST['fullname']);
        $full_name = mysqli_real_escape_string($conn, $full_name);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

      
        $query    = "INSERT into `registration` (fullname,username,email_address, password)
                     VALUES ('$full_name','$username', '$email','$password')";
        $result   = mysqli_query($conn, $query) or die("Error in adding account: ".mysqli_error($conn));

        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='Login_Form.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form class="form" action="" method="post" method="post">
        <img src="blood.png" alt="" style="margin-top: -70px; margin-left: -50px">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="fullname" placeholder="Full Name" required />
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="Login_Form.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>