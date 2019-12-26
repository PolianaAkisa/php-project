<?php $pagename="Reports Page"; ?>
<head>
<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<br>
<h2>Appointments</h2>
<?php
$db=mysqli_connect('localhost','root',"",'login');
//if ($con->connect_error)
{
	/*die("connection failed:" .$con->connect_error);*/ $con=mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
    
    //mysqli_select_db($con,"login") or die(mysqli_error($con));
}
		
		$ReportMade="SELECT appointment_student_firstname,appointment_student_lastname,registration_no,university,date_time,doctor_id FROM appointment ORDER BY 'appointment_id' DESC";
		$result=$db->query($ReportMade);
		
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc())
			{
				echo"<div class='input-form'>" .$row["date_time"]."<br>"."<br>"."Student First name:" .$row["appointment_student_firstname"]."<br>"."Student Last name:" .$row["appointment_student_lastname"]."<br>"."Student registration number:" .$row["registration_no"]."<br>"."Which university:" .$row["university"]."<br>"."<br>"."Doctor:" .$row["doctor_id"]."<br>"."<br></div>";
				
				echo"<hr>";
			}
		}
		else
		{
			echo"No recent appointments made";
		}
?>
</div>
		