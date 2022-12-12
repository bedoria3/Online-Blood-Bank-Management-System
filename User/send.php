<?php
ob_start();
session_start();
include_once('./includes/db_connect.inc');
if (isset($_POST["sbmt"])) {

  $d = $_POST["year"] . "/" . $_POST["month"] . "/" . $_POST["day"];
  $s = "insert into requestblood(name,gender,age,mobile_number,blood_group,quantity,email,require_date,detail,status) values('" . $_POST["t1"] . "','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] . "','" . $d . "','" . $_POST["t7"] . "','" . $_POST["t8"] . "')";

  $q = mysqli_query($conn, $s);
  mysqli_close($conn);
  if ($q > 0) {
    echo "<script>alert('Send Request Successfully!');</script>";
  } else {
    echo "<script>alert('Saving Record Failed');</script>";
  }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="user.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <script type="text/javascript">
    $(function () {
      SyntaxHighlighter.all();
    });
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5,
        minItems: 2,
        maxItems: 4,
        start: function (slider) {
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</head>

<body>
  <div class="sidebar" style="  background-color: #DDD7D7;">
    <div class="logo-details">
      <img style="width:150px; margin-left: 44px;margin-top:45px" class="logo" src="userimages/logofinal.png" alt="">
    </div>
    <br><br>
    <ul class="nav-links">
      <li>
        <a href="home.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/home.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Home</span>
        </a>
      </li>
      <li>
        <a href="Donations.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/donate.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Donate</span>
        </a>

      </li>
      <li>
        <a href="send.php" class="active">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/arrow.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Send Request</span>

        </a>
      </li>
      <li>
        <a href="view.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/view.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">View Request</span>
        </a>
      </li>
      <li>
        <a href="blood.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/blood.png" alt="">
          <span class="links_name" style="color:red;margin-left:10px">Blood Details</span>
        </a>
      </li>
      <li>
        <a href="camps.php">
          <img style="width:30px;margin-left:20px ;border-radius:20px" class="logo" src="userimages/camps.png" alt="">
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
    <div class="main_content">
      <br><br>
      <center>
        <form method="post">
          <table cellpadding="0" cellspacing="0"
            style="margin-top: x; border-radius: 10px;background-color: lightgrey; width: 630px">
            <tr>
              <img src="userimages/send.png" style="width:170px; margin-top: 50px" />
              <h2 style="text-align:center; color: black; margin-left: 8px;  margin-top: -20px; font-size: 24px;">Send
                Request Form</h2>
              <td>

              <td colspan="2"></td>

              </td>
            </tr>

            <tr>
              <td>&nbsp;</td>

              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"> <span style="color: black;  margin-left: 110px; margin-top: 20px"><b>Name:</b></span>
              </td>
              <td><input
                  style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
                  type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,60}"
                  title="please enter only character  between 5 to 15 for donor name" />
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black;margin-left: 110px;"><b>Gender:</b></span></td>
              <td><input name="r1" type="radio" value="male" checked="checked" style="margin-left: -89px;"><span
                  style="color: black; margin-left: 10px;"><b>Male</b></span><input name="r1" type="radio"
                  value="female" style="margin-left: 25px;"><span
                  style="color: black; margin-left: 10px;"><b>Female</b></span>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black;margin-left: 110px;"><b>Age</b></span>
              </td>
              <td><input
                  style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
                  type="number" name="t2" required="required" pattern="[0-9]{2,2}"
                  title="please enter only  numbers between 2 to 2 for age" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black;margin-left: 110px;"><b>Mobile No</b></span></td>
              <td><input
                  style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
                  type="number" name="t3" required="required" pattern="[0-9]{10,12}"
                  title="please enter only numbers between 10 to 12 for mobile no." /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black; margin-left: 110px"><b>Blood Group</b></span>
              </td>
              <td><select
                  style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
                  name="t4" required>
                  <option>Select Blood Group</option>
                  <option value="O+">O+</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="O-">O-</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>

                </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black;margin-left: 110px"><b>Quantity</b></span></td>
              <td><input
                  style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
                  type="text" name="t5" required="required" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black;margin-left: 110px"><b>Username</b></span></td>
              <td><input
                  style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
                  type="text" name="t6" required="required" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black; margin-left: 110px"><b>Till Required Date</b></span>
              </td>
              <td>
                <select style="margin-left: -89px;height:30px; width:150px; border-radius: 5px; border:solid black 1px"
                  name="month">
                  <option value="1">JAN</option>
                  <option value="2">FEB</option>
                  <option value="1">MARCH</option>
                  <option value="1">APRIL</option>
                  <option value="1">MAY</option>
                  <option value="1">JUNE</option>
                  <option value="1">JULY</option>
                  <option value="1">AUG</option>
                  <option value="1">SEPT</option>
                  <option value="1">OCT</option>
                  <option value="1">NOV</option>
                  <option value="1">DEC</option>
                </select>
                <select style="height:30px; width:80px; border-radius: 5px; border:solid black 1px" name="day">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>

                <input style="height:30px; width:60px; border-radius: 5px; border:solid black 1px" type="text"
                  name="year" style=" width:50px" />
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black;margin-left: 110px"><b>Detail</b></span></td>
              <td><textarea
                  style="margin-left: -89px;height:60px; width:300px; border-radius: 5px; border:solid black 1px"
                  name="t7"></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="lefttd"><span style="color: black; margin-left: 110px"><b>Status</b></span>
              </td>
              <td><select style="margin-left: -89px; height:30px; width:300px; border-radius: 5px; border:solid black 1px"
              name="t8"  required>
              <option   value="">Select status</option>
                  <option   value="pending">Pending</option>


                </select></td> 
    
            </tr><br><br>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" style="margin-top: 5%;background:linear-gradient(#900,#D50000); width:120px; height:40px; border-radius:7px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:20px; text-shadow:1px 1px 6px black;" value="Submit" name="sbmt"
                  style="margin-bottom:30px; margin-left: -100px;border:0px; background:linear-gradient(#900,#D50000); width:120px; height:40px; border-radius:7px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:20px; text-shadow:1px 1px 6px black; ">
              </td>
            </tr>
  
            
          </table>

        </form>
    </div>
    </div>
    </center>
    </div>
  </section>
  <br><br><br><br><br><br><br>

  <footer class="footer">

    <div class="socmed">

      <i class="fa-brands fa-linkedin"></i>

      <i class="fa-brands fa-facebook"></i>

      <i class="fa-brands fa-instagram"></i>

      <i class="fa-brands fa-youtube"></i>

    </div>

    <div class="footer-text">

      <p>All Rights Reserved <span>@2002</span></p>

    </div>

  </footer>
</body>

</html>