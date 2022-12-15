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
  th{
    width:350px;
    color:red;
    text-align:center;
  }
 table{
  border:solid black 1px;
  width:30%; 
  display: inline-block;
 }
 td{
  text-align:center;
 }
 .donation{
  width: 90%;
   margin-top: 70px; 
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
          <a href="../managedonor.php"  >
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
          <a href="../managestock.php" class="active">
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
        <a href="../managerequest.php">
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
        <span class="dashboard" id="ok"> View Stock</span>
      </div>

    </nav> <br><br> <br> <br><br>
  

  <center>  <section>

    <?php

ob_start();
session_start();

require_once('../includes/db_connect.inc');

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_o_plus;";
                      $result = mysqli_query($conn, $blood_query);
                      echo"<table >
                      <tr >
                        <th>Type O+</th>
    
                      </tr>";
                       while($row=mysqli_fetch_array($result)){
                       echo"<tr>
                       <td>".$row[0]."</td>
                       </tr>";
                      }

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_a_plus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30%;display: inline-block'>
                      <tr>
                        <th>Type A+ </th>
    
                      </tr>";
                       while($row=mysqli_fetch_array($result)){
                       echo"<tr>
                       <td>".$row[0]."</td>
                       </tr>";
                      }

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_b_plus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30% ;display: inline-block'>
                      <tr>
                        <th>Type B+ </th>
    
                      </tr>";
                       while($row=mysqli_fetch_array($result)){
                       echo"<tr>
                       <td>".$row[0]."</td>
                       </tr>";
                      }

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_ab_plus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30%;display: inline-block'>
                        <tr>
                          <th>Type AB+ </th>
      
                        </tr>";
                         while($row=mysqli_fetch_array($result)){
                         echo"<tr>
                         <td>".$row[0]."</td>
                         </tr>";
                        }

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_o_minus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30%;display: inline-block'>
                        <tr>
                          <th>Type O- </th>
      
                        </tr>";
                         while($row=mysqli_fetch_array($result)){
                         echo"<tr>
                         <td>".$row[0]."</td>
                         </tr>";
                        }

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_a_minus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30%;display: inline-block'>
                      <tr>
                        <th>Type A- </th>
    
                      </tr>";
                       while($row=mysqli_fetch_array($result)){
                       echo"<tr>
                       <td>".$row[0]."</td>
                       </tr>";
                      }

                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_b_minus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30%;display: inline-block'>
                      <tr>
                        <th>Type B- </th>
    
                      </tr>";
                       while($row=mysqli_fetch_array($result)){
                       echo"<tr>
                       <td>".$row[0]."</td>
                       </tr>";
                      }
                   
                      $blood_query = "SELECT SUM(blood_quantity) as sum_blood_quantity FROM blood_ab_minus;";
                      $result = mysqli_query($conn, $blood_query);
                        echo"<table border='2'  style='width:30%;display: inline-block'   >
                      <tr>
                        <th>Type AB- </th>
    
                      </tr>";
                       while($row=mysqli_fetch_array($result)){
                       echo"<tr>
                       <td>".$row[0]."</td>
                       </tr>";
                      }
                   
                    ?>
                    
                    
    </section></center>






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

