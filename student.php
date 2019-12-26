<?php
$con=mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
    
    mysqli_select_db($con,"login") or die(mysqli_error($con));
	//$query=("SELECT * FROM total_hospitals");
	//$query = mysqli_real_escape_string($con,$query);
	$sql = ("SELECT * FROM report") or die(mysqli_error($con));
        //$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
             
            
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Fetching Data</title>
</head>
<body>
    
	<table width="700" border="2" cellpadding="3" cellspacing="2">
		<tr bgcolor="#2ECCFA">
			<th>Student Registration</th>
			<th>Student Name</th>
			<th>Examined by</th>
			<th>Description</th>
		</tr>
<?php
	
	while($row = mysqli_fetch_assoc($result)){
            
             echo"<tr>";
		echo"<td>".$row['student_registration_no']."</td>";
		echo"<td>".$row['student_name']."</td>";
		echo"<td>".$row['examined_by']."</td>";
		echo"<td>".$row['description']."</td>";
		echo"</tr>";
	
              //echo "<tr><td>".$row["student_registration_no"]."</td><td>".$row["student_name"]." ".$row["examined_by"]."".$row["description"]."</td></tr>";
             
            }
             
        
      
		
?>


</table>		
</body>
</html>



