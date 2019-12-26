<?php $pagename="Reports Page"; ?>
<head>
<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<br>
<h2>Recent Reports</h2>
<?php
$db=mysqli_connect('localhost','root',"",'login');
{
	$con=mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
}
		
		$ReportMade="SELECT student_registration_no,student_firstname,student_lastname,examined_by,date_time,description FROM report ORDER BY 'report_id' DESC";
		$result=$db->query($ReportMade);
		
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc())
			{
				echo"<div class='input-form'>" .$row["date_time"]."<br>"."<br>"."Student registration number:" .$row["student_registration_no"]."<br>"."Student Firstname:" .$row["student_firstname"]."<br>"."Student Lastname:" .$row["student_lastname"]."<br>"."<br>"."Examined by:" .$row["examined_by"]."<br>"."Description:" .$row["description"]."<br>"."<br></div>";
			
				echo"<hr>";
			}
		}
		else
		{
			echo"No recent reports made";
		}
?>
</div>
		