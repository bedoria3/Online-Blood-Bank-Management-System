<?php
   ob_start();
   session_start();
   include_once('../includes/db_connect.inc');
   
//    if(isset($_SESSION['logged_in']) && isset($_SESSION['username'])
//    && !empty($_SESSION['username'])){
//        session_unset();
//        header("Refresh: 0.5; url=login.php");

//    }
   if (isset($_POST['submit'])) {   
   
       $name = $_POST["firstname"];
       $gender = $_POST["gender"];
       $age = $_POST["age"];
       $phone = $_POST["number"];
       $address = $_POST["address"];
       $blood_type = $_POST["bloodtype"];
       $blood_quantity = $_POST["blood"];
       $camps = $_POST["camps"];
       

      
        $query = "INSERT into `donations_file` (donor_name,gender,age, mobile_phone, address, blood_type, blood_quantity, camps) VALUES('$name','$gender','$age','$phone','$address', '$blood_type', '$blood_quantity', '$camps' )";
        $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        $id = mysqli_insert_id($conn);
        if ( $blood_type == 'O+') {
            $query = "INSERT into `blood_o_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
    
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'A+') {
            $query = "INSERT into `blood_a_plus` (blood_id, blood_quantity) VALUES('$id', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'B+') {
            $query = "INSERT into `blood_b_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'AB+') {
            $query = "INSERT into `blood_ab_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'O-') {
            $query = "INSERT into `blood_o_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'A-') {
            $query = "INSERT into `blood_a_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'B-') {
            $query = "INSERT into `blood_b_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'AB-') {
            $query = "INSERT into `blood_ab_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
//    CAMPS QUERIES
        if ( $camps == 'Cebu City Medical Center') {
            $query = "INSERT into `cebu_medical_center` (id, type_blood,quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'CEBUDOC') {
            $query = "INSERT into `cebu_doctor_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error  in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SOTTO') {
            $query = "INSERT into `vicente_sotto_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'NORTHGEN') {
            $query = "INSERT into `north_general_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SOUTHGEN') {
            $query = "INSERT into `south_general_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SACRED') {
            $query = "INSERT into `sacred_heart_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
            echo "<script>alert('Successfully Added')</script>";
            header("refresh: 0; url= ../managedonor.php");
        } else {
            $message ="<p>Not added in the database</p>";
        }
     
    } else

    ?>
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

    <div id= "sample">
  <form action = "" method = "post" style= "margin-left: 30%;">
    <label for="fname">Donor Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Gender</label>
    <input type="text" id="gender" name="gender" placeholder="Your Gender.." required>

    <label for="age">Age</label>
    <input type="number" id="age" name="age" required>

    <label for="lname">Mobile Phone</label>
    <input type="number" id="number" name="number" placeholder="Your phone number.." required>

    <label for="lname">Address</label>
    <input type="text" id="address" name="address" placeholder="Your Address.." required>

    <!-- <label for="lname">BloodType</label>
    <input type="text" id="bloodtype" name="bloodtype" placeholder="Your bloodtype.." required> -->
    
    <label>BloodType<select name="bloodtype"  required></label>
                                        <option >Select Blood Group</option>
                                        <option value="O+">O+</option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O-">O-</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        </select>

    <label for="lname">BloodQuantity</label>
    <input type="number" id="blood" name="blood" required>
    
    <!-- <label for="lname">Camps</label>
    <input type="text" id="camps" name="camps" required> -->
    <label>Camps<select name="camps"  required></label>
    <option>Select Camps</option>
                                        <option value="Cebu City Medical Center">Cebu City Medical Center</option>
                                        <option value="CEBUDOC">Cebu Doctor's University Hospital</option>
                                        <option value="SOTTO">Vicente Sotto Memorial Medical Center</option>
                                        <option value="NORTHGEN">North General Hospital</option>
                                        <option value="SOUTHGEN">South General Hospital</option>
                                        <option value="SACRED">Sacred Heart Hospital</option>

  
    <input type="submit" name= "submit" value="Submit">


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

