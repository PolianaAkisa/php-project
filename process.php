<?php
/*if(isset($_POST['login']))
{
	$servername = "localhost";
	$username = "root";
	$password = "rootpassword";
	
	$username= $_POST['username'];
	$password= $_POST['password'];
	//prevent mysql injection
	$username= stripcslashes($username);
	$password= stripcslashes($password);*/
	
	//connect to the server
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn,'login');
		/*if (! $conn)
		{
			die('Could not connect:' .$conn->mysqli_connect_error());
		}
	echo "Connected successfully<br />";
	//Query the database for user_error
	$result= mysqli_query($conn,"select * from users where username = '$username' and password= '$password'")
	or die("Failed to query the database".mysqli_error());

	$row = mysqli_fetch_array($result);
	if ($row ['username']== $username && $row['password']== $password)
	{
	echo"Login success!!!! Welcome".$row['username'];
	}
	else{
		echo"Failed login!!";
	}

mysqli_close($conn);
}*/

?>