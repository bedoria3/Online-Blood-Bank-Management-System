<?php

ob_start();
session_start();

require_once('./includes/db_connect.inc');

if(isset($_SESSION['logged_in']) && isset($_SESSION['username'])){

}else{
  session_unset();
  header("Refresh: 0.2; url=./admin_login.php");
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Manage Stocks</title>
   </head>
   <style>
  .buton {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.donation{
  width: 90%;
   margin-top: 30px; 
   margin-left: 40%;
}
   </style>
<body>
  <div class="sidebar" style="  background-color: #DDD7D7;">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'  style= "color:red;"></i>
      <span class="logo_name" style= "color:red;">Admin Panel</span>
    </div>
      <ul class="nav-links" >
        <li>
          <a href="./admin_dashboard.php" >
            <i class='bx bx-grid-alt'  style= "color:red;"></i>
            <span class="links_name"  style= "color:red;">Dashboard</span>
          </a>
        </li>
        <li >
          <a href="./manageblood.php" >
            <i class='bx bx-box'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Blood Group</span>
          </a>

        </li>
        <li>
          <a href="managedonor.php"  >
            <i class='bx bx-list-ul'  style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage Donor</span>
          </a>
        </li>
        <li>
          <a href="./managecquery.php">
            <i class='bx bx-pie-chart-alt-2' style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage ContactUs <br> Query</span>
          </a>
        </li>
        <li>
          <a href="./manageadmin.php">
            <i class='bx bx-coin-stack'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Admins</span>
          </a>
        </li>
        <li>
          <a href="managestock.php" class="active">
            <i class='bx bx-book-alt'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Stocks</span>
          </a>
        </li>
        <li>
          <a href="./managecamps.php">
            <i class='bx bx-user'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Camps</span>
          </a>
        </li>
        <li>
        <a href="./managerequest.php">
            <i class='bx bx-list-ul'  style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage Blood <br> Request</span>
          </a>
          
        </li>
      
      </ul>
  </div>
  <section class="home-section" >
    <nav style= "background-color:red;">
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" id="ok">Manage Stocks</span>
      </div>
      <div class="profile-details">
        <span class="admin_name"> <?php echo $_SESSION["username"]; ?></span>
        <div class="dropdown">
              <button style="margin-left:100%;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
        </div>
    </nav>

    <div class="home-content">
      <div style="width: 60%;margin-left:200px"class="overview-boxes">
        <div style="width: 300px;border:solid red 2px" class="box" >
          <div class="right-side">
          <img style="width:70px;margin-left:20px ;border-radius:20px"class="logo" src="userimages/view.png" alt="">
            <div class="box-topic">View Stock</div>
            <center> <a href="View Functions/view_stock.php" class="button">Click Me</a></center>  
            <div class="indicator">
            </div>
          </div>

        </div>

      <div >
        <img class="donation" src="userimages/donation.png" alt="">
      </div>


  </section>






<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

