<?php include( 'server2.php');?>

<!--
			session_start(); 
		  
			if (!isset($_SESSION['username'])){
				$_SESSION['msg'] = "You must log in first";
				header('location: signin.php');
			}
			if (isset($_GET['logout'])){
				session_destroy();
				unset($_SESSION['username']);
				header("location: university.php");
			}
else{
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Make a report</title>
<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>



	<h3 >Report Form </h3>
	<form class="input-form" method="post" action="makeareport.php">

		
		<div >
		<input type="text" class="input" name="student_registration_no" placeholder="Student registration number">
		</div><br>

		<div>
		<input type="text" class="input" name="student_firstname" placeholder="First Name of the student">
		</div><br>
		
		<div>
		<input type="text" class="input" name="student_lastname" placeholder="Last Name of the student">
		</div><br>

		<div>
		<input type="text" class="input" name="examined_by" placeholder="Examined by">
		</div><br>
		
		

		<div>
		<textarea name="description" class="input" cols="114" rows="4" placeholder="Brief Description"></textarea>
		</div><br>
		
		

		<div>
		<input type="submit" value="submit" class="form-submit" name = "submit-report">
		</div>

	</form>
	
	
	</body>


</html>

