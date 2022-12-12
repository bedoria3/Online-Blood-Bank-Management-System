<?php
ob_start();
session_start();

require_once('../Admin/includes/db_connect.inc');

if (
   isset($_SESSION['logged_in']) && isset($_SESSION['admin'])
   && !empty($_SESSION['admin'])
) {
   session_unset();
   header("Refresh: 0.5; url=Log_As.php");
}

if (isset($_POST['admin'])) {
   header('location:../Admin/login_admin.php');
}
if (isset($_POST['user'])) {
   header('location:../User/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log As</title>
   <link rel="stylesheet" href="user.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3 align="center">Log AS</h3>
         <input type="submit" name="admin" value="Admin" class="form-btn">
         <input type="submit" name="user" value="User" class="form-btn">
         <button type="button" style="margin-left: 290px; font-size: 15px; padding: 3px 15px;"
            onclick="history.back();">Back</button>

      </form>

   </div>
</body>

</html>