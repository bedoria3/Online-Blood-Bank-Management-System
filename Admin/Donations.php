<?php
   ob_start();
   session_start();
   include_once('./includes/db_connect.inc');
   
//    if(isset($_SESSION['logged_in']) && isset($_SESSION['username'])
//    && !empty($_SESSION['username'])){
//        session_unset();
//        header("Refresh: 0.5; url=login.php");
//    }
   if (isset($_POST['submit'])) {   
   
       $name = $_POST["name"];
       $gender = $_POST["gender"];
       $age = $_POST["age"];
       $phone = $_POST["phone"];
       $address = $_POST["address"];
       $blood_type = $_POST["blood_type"];
       $blood_quantity = $_POST["blood_quantity"];
       $camps = $_POST["camps"];
       

      
        $query = "INSERT into `donations_file` (donor_name,gender,age, mobile_phone, address, blood_type, blood_quantity, camps) VALUES('$name','$gender','$age','$phone','$address', '$blood_type', '$blood_quantity', '$camps' )";
        $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        $id = mysqli_insert_id($conn);
        if ( $blood_type == 'O+') {
            $query = "INSERT into `blood_o_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'A+') {
            $query = "INSERT into `blood_a_plus` (blood_id, blood_quantity) VALUES('$id', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'B+') {
            $query = "INSERT into `blood_b_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'AB+') {
            $query = "INSERT into `blood_ab_plus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'O-') {
            $query = "INSERT into `blood_o_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'A-') {
            $query = "INSERT into `blood_a_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'B-') {
            $query = "INSERT into `blood_b_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'AB-') {
            $query = "INSERT into `blood_ab_minus` (blood_id, blood_quantity) VALUES('$id','$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
//    CAMPS QUERIES
        if ( $camps == 'Cebu City Medical Center') {
            $query = "INSERT into `cebu_medical_center` (id, type_blood,quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'CEBUDOC') {
            $query = "INSERT into `cebu_doctor_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error  in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SOTTO') {
            $query = "INSERT into `vicente_sotto_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'NORTHGEN') {
            $query = "INSERT into `north_general_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SOUTHGEN') {
            $query = "INSERT into `south_general_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SACRED') {
            $query = "INSERT into `sacred_heart_hospital` (id, blood_type,blood_quantity) VALUES('$id','$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
     
    } else

    ?>
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
            <img style="width:150px; margin-left: 44px;margin-top:45px" class="logo" src="userimages/logofinal.png"
                alt="">
        </div>
        <br><br>
        <ul class="nav-links">
            <li>
                <a href="home.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/home.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Home</span>
                </a>
            </li>
            <li>
                <a href="Donations.php" class="active">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo"
                        src="userimages/donate.png" alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Donate</span>
                </a>

            </li>
            <li>
                <a href="send.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/send.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Send Request</span>

                </a>
            </li>
            <li>
                <a href="view.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/view.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">View Request</span>
                </a>
            </li>
            <li>
                <a href="blood.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/blood.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Blood details</span>
                </a>
            </li>
            <li>
                <a href="camps.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/camps.png"
                        alt="">
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


        <section class="container_area_holder doner_area_holder">
            <div class="design">
                <div class="container1" style="display: flex;">
                    <div class="form_holder"
                        style="margin-top: 100px;border-radius: 10px; border-color: black solid; background-color: lightgrey; padding:10px 10px 10px;">
                        <form action="Donations.php" method="post" onsubmit="return validateForm()">
                            <div class="for" style="width: 480px;">
                                <center><img src="userimages/send.png" style="width:150px;" />
                                    <h2 style=" font-size: 20px;margin-top: -15px;">Blood Donations Form</h2>
                                </center>
                                <br>
                                <label>Full Name: <input type="text" placeholder="Name" name="name" id="nameid"
                                        required></label>
                                <label>Gender:<select name="gender" required></label>
                                <option>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                </select>
                                <label>Age:</label><input type="number" name="age" placeholder="Age" required="required"
                                    pattern="[0-9]{2,2}"
                                    title="please enter only  numbers between 2 to 2 for age" /></label>
                                <label>Phone Number:<input type="tel" placeholder="Phone Number" name="phone"
                                        required></label>
                                <label>Address<input type="text" placeholder="Address" name="address" id="addressid"
                                        required></label>
                                <label>Blood Group<select name="blood_type" required></label>
                                <option>Select Blood Group</option>
                                <option value="O+">O+</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="O-">O-</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                </select>
                                <label>Quantity</label><input type="number" name="blood_quantity"
                                    placeholder="Quantity(liters)" required="required" pattern="[0-9]{2,2}"
                                    title="please enter only  numbers between 2 to 2 for age" /></label>

                                <label>Camps<select name="camps" required></label>
                                <option>Select Camps</option>
                                <option value="Cebu City Medical Center">Cebu City Medical Center</option>
                                <option value="CEBUDOC">Cebu Doctor's University Hospital</option>
                                <option value="SOTTO">Vicente Sotto Memorial Medical Center</option>
                                <option value="NORTHGEN">North General Hospital</option>
                                <option value="SOUTHGEN">South General Hospital</option>
                                <option value="SACRED">Sacred Heart Hospital</option>
                                <input type="submit" name="submit" value="DONATE">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
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
<script>
    function validateForm() {
        alert("Your Donation is successfully recorded");
        return true;
    }
</script>

</html>