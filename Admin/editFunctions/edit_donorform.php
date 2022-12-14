<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Manage Donor</title>
   </head>
   <style>
  input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=number], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  #sample {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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
          <a href="../admin_dashboard.php" >
            <i class='bx bx-grid-alt'  style= "color:red;"></i>
            <span class="links_name"  style= "color:red;">Dashboard</span>
          </a>
        </li>
        <li >
          <a href="../manageblood.php" >
            <i class='bx bx-box'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Blood Group</span>
          </a>

        </li>
        <li>
          <a href="../managedonor.php"  class="active">
            <i class='bx bx-list-ul'  style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage Donor</span>
          </a>
        </li>
        <li>
          <a href="../managecquery.php">
            <i class='bx bx-pie-chart-alt-2' style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage ContactUs <br> Query</span>
          </a>
        </li>
        <li>
          <a href="../manageadmin.php">
            <i class='bx bx-coin-stack'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Admins</span>
          </a>
        </li>
        <li>
          <a href="../managestock.php">
            <i class='bx bx-book-alt'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Stocks</span>
          </a>
        </li>
        <li>
          <a href="../managecamps.php">
            <i class='bx bx-user'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Camps</span>
          </a>
        </li>
        <li>
        <a href="./managerequest.php">
            <i class='bx bx-list-ul'  style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage Blood<br> Request</span>
          </a>
          
        </li>
      
      </ul>
  </div>
  <section class="home-section" >
    <nav style= "background-color:red;">
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" id="ok">Add Donor</span>
      </div>


    </nav> <br><br> <br> 

    <?php

ob_start();
session_start();
    
require_once('../includes/db_connect.inc');

$id=$_GET['donation_ID'];
$qry= "select * from donations_file where donation_ID='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
    
?>                  

    <div id= "sample">
  <form action = "./editeddonor.php" method = "post" style= "margin-left: 30%;">
    <label for="fname">Donor Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." value='<?php echo $row['donor_name']; ?>' required>

    <label for="lname">Gender</label>
    <input type="text" id="gender" name="gender" placeholder="Your Gender.."  value='<?php echo $row['gender']; ?>' required>

    <label for="birthday">Age</label>
    <input type="number" id="age" name="age"  value='<?php echo $row['age']; ?>' required>

    <label for="lname">Mobile Phone</label>
    <input type="number" id="number" name="number" placeholder="Your phone number.."  value='<?php echo $row['mobile_phone']; ?>' required>

    <label for="lname">Address</label>
    <input type="text" id="address" name="address" placeholder="Your Address.."  value='<?php echo $row['address']; ?>' required>

    <label for="lname">BloodType</label>
    <input type="text" id="bloodtype" name="bloodtype" placeholder="Your bloodtype.."  value='<?php echo $row['blood_type']; ?>' required>

    <label for="lname">BloodQuantity</label>
    <input type="number" id="blood" name="blood"  value='<?php echo $row['blood_quantity']; ?>' required>
    
    <label for="lname">Camps</label>
    <input type="text" id="camps" name="camps" value='<?php echo $row['camps']; ?>' required>



  
    <input type="hidden" name="id" value="<?php echo $row['donation_ID'];?>" 

<div >
<input type="submit" value="Submit">

  <?php
}
?>
</div>
</form>

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

