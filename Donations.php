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
                <li><a href="Donations.php"><img src="./userimages/donate.png" />
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
        <div class="design" style="height: 750px; width: 650px">
            <table cellpadding="0" cellspacing="0" width="500px" height="480px" style="margin:auto">
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
                                        <input type="submit" name="submit" value="Register">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <?php
    require_once('dbconnect.php');
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $blood_type = $_POST["blood_type"];
        $blood_quantity = $_POST["blood_quantity"];


        $query = "INSERT into `donation` (donor_name,gender,age, mobile_phone, address, blood_type, blood_quantity) VALUES('$name','$gender','$age','$phone','$address', '$blood_type', '$blood_quantity')";
        $result = mysqli_query($conn, $query) or die("Error in adding account: " . mysqli_error($conn));

    } else

 
  

    $sql_query = "INSERT INTO blood_o_plus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='O+'";
    $result = mysqli_query($conn, $sql_query) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query2 = "INSERT INTO blood_a_plus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='A+'";
    $result = mysqli_query($conn, $sql_query2) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query3 = "INSERT INTO blood_b_plus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='B+'";
    $result = mysqli_query($conn, $sql_query3) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query4 = "INSERT INTO blood_ab_plus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='AB+'";
    $result = mysqli_query($conn, $sql_query4) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query5 = "INSERT INTO blood_o_minus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='O-'";
    $result = mysqli_query($conn, $sql_query5) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query6 = "INSERT INTO blood_a_minus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='A-'";
    $result = mysqli_query($conn, $sql_query6) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query7 = "INSERT INTO blood_b_minus (blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='B-'";
    $result = mysqli_query($conn, $sql_query7) or die("Error in adding account: " . mysqli_error($conn));

    $sql_query8 = "INSERT INTO blood_ab_minus(blood_type, blood_quantity) SELECT blood_type, blood_quantity FROM donation WHERE blood_type='AB-'";
    $result = mysqli_query($conn, $sql_query8) or die("Error in adding account: " . mysqli_error($conn));

    
    ?>

    <script>
        function validateForm() {
            alert("User Registered Successfully");
            return true;
        }
    </script>
</body>

</html>