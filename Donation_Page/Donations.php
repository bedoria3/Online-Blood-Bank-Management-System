<?php
   ob_start();
   session_start();
   require_once('dbconnect.php');
   
   if(isset($_SESSION['logged_in']) && isset($_SESSION['username'])
   && !empty($_SESSION['username'])){
       session_unset();
       header("Refresh: 0.5; url=login.php");
   }
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

        if ( $blood_type == 'O+') {
            $query = "INSERT into `blood_o_plus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'A+') {
            $query = "INSERT into `blood_a_plus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'B+') {
            $query = "INSERT into `blood_b_plus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'AB+') {
            $query = "INSERT into `blood_ab_plus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'O-') {
            $query = "INSERT into `blood_o_minus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'A-') {
            $query = "INSERT into `blood_a_minus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'B-') {
            $query = "INSERT into `blood_b_minus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $blood_type == 'AB-') {
            $query = "INSERT into `blood_ab_minus` (blood_quantity) VALUES('$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
//    CAMPS QUERIES
        if ( $camps == 'Cebu City Medical Center') {
            $query = "INSERT into `cebu_medical_center` (type_blood,quantity) VALUES('$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'CEBUDOC') {
            $query = "INSERT into `cebu_doctor_hospital` (blood_type,blood_quantity) VALUES('$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SOTTO') {
            $query = "INSERT into `vicente_sotto_hospital` (blood_type,blood_quantity) VALUES('$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'NORTHGEN') {
            $query = "INSERT into `north_general_hospital` (blood_type,blood_quantity) VALUES('$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SOUTHGEN') {
            $query = "INSERT into `south_general_hospital` (blood_type,blood_quantity) VALUES('$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
        if ( $camps == 'SACRED') {
            $query = "INSERT into `sacred_heart_hospital` (blood_type,blood_quantity) VALUES('$blood_type', '$blood_quantity')";
            $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));
        } else {
            $message ="<p>Not added in the database</p>";
        }
     
    } else

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <title>Online Blood Bank Management System</title>
</head>

<body>
    <div style="position: fixed; overflow: hidden; width: 100%;">
        <div class="header">
            <img src="./userimages/logofinal.png" alt="logo" style="width:100px; margin-top: -22px" />
            <h1 style=" font-size: 30px; margin-left: 110px;margin-top: -58px">Online Blood Bank Management System</h1>
        </div>
    </div>

    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <li><a href="home.php"><img src="./userimages/home.png" />
                        <h4 style="margin-left: 70px;margin-top:-28px">Home</h4>
                    </a></li>
                <li class="active"><a href="Donations.php"><img src="./userimages/donate.png" />
                        <h4 style="margin-left: 70px;margin-top:-33px">Donate</h4>
                    </a></li>
                <li><a href="sendrequest.php"><img src="./userimages/send (1).png" />
                        <h4 style="margin-left: 70px;margin-top:-33px;">Send Request</h4>
                    </a></li>
                <li><a href="viewrequest.php"><img src="./userimages/view.png" />
                        <h4 style="margin-left: 70px;margin-top:-32px">View Request</h4>
                    </a></li>
                <li><a href="blooddetails.php"><img src="./userimages/blood.png" />
                        <h4 style="margin-left: 70px;margin-top:-32px">Blood Details</h4>
                    </a></li>
                <li><a href="camps.php"><img src="./userimages/camps.png" />
                        <h4 style="margin-left: 70px;margin-top:-32px">Camps</h4>
                    </a></li>

            </ul>
        </div>
    </div>

    <section class="container_area_holder doner_area_holder">
        <div class="design" style="height: 970px; width: 650px">
            <table cellpadding="0" cellspacing="0" width="" height="" style="margin:auto">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form_holder">
                                <form action="Donations.php" method="post" onsubmit="return validateForm()">
                                    <div style="padding: 7px;">
                                        <h2 style="margin-top: 20px; text-align:center;">Blood Donations Form</h2><br>
                                        <label>Full Name: <input type="text" placeholder="Name" name="name" id="nameid"
                                                required></label>
                                        <label>Gender:<select name="gender" required></label>
                                        <option>Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        </select>
                                        <label>Age:</label><input type="number" name="age" placeholder="Age"
                                            required="required" pattern="[0-9]{2,2}"
                                            title="please enter only  numbers between 2 to 2 for age" /></label>
                                        <label>Phone Number:<input type="tel" placeholder="Phone Number" name="phone"
                                                required></label>
                                        <label>Address<input type="text" placeholder="Address" name="address"
                                                id="addressid" required></label>
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
</body>
<script>
    function validateForm() {
        alert("Your Donation is successfully recorded");
        return true;
    }
</script>
</html>


