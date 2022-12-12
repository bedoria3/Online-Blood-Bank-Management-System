<!-- <?php

ob_start();
session_start();
include_once('./includes/db_connect.inc');

if (isset($_SESSION['logged_in']) && isset($_SESSION['username'])) {

} else {
  session_unset();
  header("Refresh: 0.2; url=./login.php");
}

?> -->
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="user.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
</head>

<body>
  <div class="sidebar" style="  background-color: #DDD7D7;">
    <div class="logo-details">
      <img style="width:150px; margin-left: 44px;margin-top:45px" class="logo" src="userimages/logofinal.png" alt="">
    </div>
    <br><br>
    <ul class="nav-links">
      <li>
        <a href="home.php" class="active">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/home.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Home</span>
        </a>
      </li>
      <li>
        <a href="Donations.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/donate.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Donate</span>
        </a>

      </li>
      <li>
        <a href="send.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/arrow.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Send Request</span>

        </a>
      </li>
      <li>
        <a href="view.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/view.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">View Request</span>
        </a>
      </li>
      <li>
        <a href="blood.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/blood.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Blood Details</span>
        </a>
      </li>
      <li>
        <a href="camps.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/camps.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Camps</span>
        </a>
      </li>
      <li>

    </ul>
  </div>
  <section class="home-section">
    <nav style="background-color:red;">
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" id="ok">Online Blood Bank Management System</span>
      </div>

      <div class="profile-details">
        <span class="user_name">
          <?php echo $_SESSION["username"]; ?>
        </span>
        <div class="dropdown">
          <button style="margin-left:100%;" class="btn btn-default dropdown-toggle" type="button"
            data-toggle="dropdown">
            <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
        </div>
      </div>

    </nav>
    <center>
      <div class="main_content">
        <div class="info">
          <br><br><br><br><br><br><br><br>
          <div>You Don't Need To</div><br>
          <div>Be A Doctor To</div><br>
          <div>Save <span style="color: red;">Lives</span></div><br>
          <div>Just Donate <span style="color: red;">Blood</span></div><br>
          <div class="info1" style="font-size: 1.2vw;">It's SAFE. It's SIMPLE. And it saves LIVES</div>
        </div>
        <img src="./userimages/blood-removebg-preview.png" class="donate">
      </div>
    </center>
  </section>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>