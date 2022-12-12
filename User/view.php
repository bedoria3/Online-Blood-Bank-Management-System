
<?php
ob_start();
session_start();
// require_once('./includes/db_connect.inc');

// $username = $_POST['username'];
// // $get_query_in_the_database = "select * from requestblood where email=$username";
// // $result = mysqli_query($conn, $get_query_in_the_database);
// if(isset($_SESSION["username"])){
// 	// header("Location: admin_dashboard.php");
//     $get_query_in_the_database = "select * from requestblood where email=$username";
//     $result = mysqli_query($conn, $get_query_in_the_database);

//   }else{
//     echo "";
//   }
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
    <title>Blood Details</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        table {
            background-color: white;
            font-size: large;
            border: 1px solid black;
        }

        td {
            background-color: white;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 3px;
            text-align: center;
        }

        td {
            font-weight: lighter;
            font-size: 16.5px;
        }
    </style>
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
                <a href="Donations.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo"
                        src="userimages/donate.png" alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Donate</span>
                </a>

            </li>
            <li>
                <a href="send.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/arrow.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Send Request</span>

                </a>
            </li>
            <li>
                <a href="view.php" class="active">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/view.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">View Request</span>
                </a>
            </li>
            <li>
                <a href="blood.php">
                    <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/blood.png"
                        alt="">
                    <span class="links_name" style="color:red;margin-left:10px">Blood Details</span>
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

        <section><br><br><br><br><br>
            <img src="userimages/send.png" style="width: 130px;margin-left:42%;" />
            <h2 style="margin-left:40%; margin-top: -17px; color: red; font-size: 24px;">Patient Requested Blood</h2><br>
            <table style="margin-left: 20px; margin-right: 20px;">

                <!-- <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Mobile No.</th>
                <th>Blood Group</th>
                <th>Quantity</th>
                <th>Email</th>
                <th>Required Date</th>
                <th>Details</th>
                <th>Status</th>
 -->


                </tr>

            </table>
            <?php


require_once('./includes/db_connect.inc');

$qry="select * from requestblood where request_id";
$result=mysqli_query($conn,$qry);


echo"<table border='2'>
<tr>
<tr>
<th>No.</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>Mobile No.</th>
<th>Blood Group</th>
<th>Quantity</th>
<th>Email</th>
<th>Required Date</th>
<th>Details</th>
<th>Status</th>


</tr>";

while($row=mysqli_fetch_array($result)){
  echo"<tr>
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
  <td>".$row['status']."</td>


</tr>";
}
?>
        </section>
</body>

</html>