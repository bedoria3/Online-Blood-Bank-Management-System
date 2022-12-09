

<?php

ob_start();
session_start();

require_once('./includes/db_connect.inc');

if(!isset($_SESSION["username"])){
	header("Location: admin_dashboard.php");
  }
else{

	$eid = $_GET['request_id'];
	$descr = $_GET['detail'];

	$add_to_db = mysqli_query($conn, "UPDATE requestblood SET status='Accepted' WHERE request_id='".$eid."' AND detail='".$descr."'");

				if($add_to_db){	
					echo "<script>alert('Request Approved Successfully')</script>";
					header("Location: managerequest.php");
				}
				else{
					echo "Query Error : " . "UPDATE requestblood SET status='Accepted' WHERE request_id='".$eid."' AND detail='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

 
?>
