<?php
$con=mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
    
    mysqli_select_db($con,"login") or die(mysqli_error($con));
	//$query=("SELECT * FROM total_hospitals");
	//$query = mysqli_real_escape_string($con,$query);
	$sql = ("SELECT * FROM total_hospitals") or die(mysqli_error($con));
        //$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
             
            
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Fetching Hospital Data</title>
</head>
<body>
    <h1>HOSPITALS LISTINGS</h1>
	<table width="700" border="2" cellpadding="3" cellspacing="2">
		<tr bgcolor="#2ECCFA">
			<th>ID</th>
			<th>Hospital Name</th>
			<th>Email</th>
		</tr>
<?php
	
	while($row = mysqli_fetch_assoc($result)){
            
             echo"<tr>";
		echo"<td>".$row['id']."</td>";
		echo"<td>".$row['hospname']."</td>";
		echo"<td>".$row['email']."</td>";
		echo"</tr>";
	
              //echo "<tr><td>".$row["id"]."</td><td>".$row["hospname"]." ".$row["email"]."</td></tr>";
             
            }
             
        
      
		
?>


</table>		
</body>
</html>


