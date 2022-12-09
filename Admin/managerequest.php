<?php

ob_start();
session_start();
require_once('./includes/db_connect.inc');

if(!isset($_SESSION["username"])){
  header("Location: ./admin_dashboard.php");
}
else{
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
     <title>Manage Blood Request</title>
         <style>
        h1 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            padding-top: 1em;
        }

        .mycontainer {
            width: 90%;
            margin: 1.5rem auto;
            min-height: 60vh;
        }

        .mycontainer table {
            margin: 1.5rem auto;
        }
    </style>
   </head>
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
          <a href="./manageblood.php">
            <i class='bx bx-box'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Blood Group</span>
          </a>


        </li>
        <li>
          <a href="./managedonor.php">
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
          <a href="./managestock.php">
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
        <a href="#" class= "active">
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
        <span class="dashboard" id="ok">Manage Blood Request</span>
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

    </nav> <br><br><br><br><br><br><br><br>
    <div class="forms" style="margin-left:80%">
     
     <a   href="./View Functions/viewhistory.php" class="button">View Request History</a>

</div>
 
    <center>  <section>


</section></center>
    <div class="mycontainer">

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <th>ID</th>
        <th>name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Mobile Number</th>
        <th>Blood Group</th>
        <th>Quantity</th>
        <th>Email</th>
        <th>Require Date</th>
        <th>Details</th>
        <th>Actions</th>
                   
                </thead>
                <tbody>
                      
                        <?php
                        

                                $query = mysqli_query($conn,"SELECT * FROM requestblood WHERE status='Pending'");
                                
                                $numrow = mysqli_num_rows($query);

                               if($query){
                                    
                                    if($numrow!=0){

                                          while($row = mysqli_fetch_assoc($query)){
                                    
                                            echo "<tr>
                                                  
                                                    <td>".$row['request_id']."</td>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['gender']."</td>
                                                    <td>".$row['age']."</td>
                                                    <td>".$row['mobile_number']."</td>
                                                    <td>".$row['blood_group']."</td>
                                                    <td>".$row['quantity']."</td>
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['require_date']."</td>
                                                    <td>".$row['detail']."</td>                                                   
                    
                                                    <td><a href=\"approved.php?request_id={$row['request_id']}&detail={$row['detail']}\"><button class='btn-success btn-sm' >Accept</button></a>
                                                    <a href=\"reject.php?request_id={$row['request_id']}&detail={$row['detail']}\"><button class='btn-danger btn-sm' >Reject</button></a></td>
                                                   </tr>";  
 }       
                                    }
                                }
                                else{
                                    echo "Query Error";
                                }
                       ?> 
                    
                </tbody>
            </table>
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
<?php
}

?>
