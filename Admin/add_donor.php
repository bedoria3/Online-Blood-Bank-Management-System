<!-- <?php 
ob_start();
session_start();

require_once('includes/db_connect.inc');
$message = "";

if (isset($_SESSION['logged_in']) && isset($_SESSION['username'])){
  $get_user_list = "select * from manage_blood";
  $result_query= mysqli_query($conn,$get_user_list);
  if(mysqli_query_num_rows($result_query)> 0){
    $results = mysqli_fetch_all($result_query,MYSQLI_ASSOC);

  }
  else{
    $message= "No users found";
  }


}else{
  session_unset();
  // header("Refresh: 0.5; url=login.php");

}

?> -->



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./admin.css">
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

  input[type=date], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  #sample {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  form{
    

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
          <a href="#"  class="active">
            <i class='bx bx-list-ul'  style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage Donor</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' style= "color:red;" ></i>
            <span class="links_name"  style= "color:red;">Manage ContactUs <br> Query</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Admins</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Stocks</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user'  style= "color:red;"></i>
            <span class="links_name" style= "color:red;">Manage Camps</span>
          </a>
        </li>
        <li>
      
      </ul>
  </div>
  <section class="home-section" >
    <nav style= "background-color:red;">
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" id="ok">Add Donor</span>
      </div>

      <div class="profile-details">
        <span class="admin_name">Ma. Elena</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav> <br><br> <br> 

    <div id= "sample">
  <form action="/action_page.php" style= "margin-left: 30%;">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="birthday">Birthday</label>
    <input type="date" id="birthday" name="birthday">

    <label for="lname">Weight</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Contact</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">BloodType</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  
    <input type="submit" value="Submit">
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

