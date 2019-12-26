<?php
require'process.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration Page</title>
	<link rel="stylesheet"  type="text/css" href="style6.css">
</head>
<body>



<form action="register.php" method="POST">
  <div class="container">
    <h1> Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="firstName"><b>FirstName</b></label>
    <input name="firstName" type="text" placeholder="Enter FirstName"required>

	<label for="lastName"><b>LastName</b></label>
    <input name="lastName" type="text" placeholder="Enter LastName"  required>

	
	
	<label for="student_registration_no"><b>Student registration Number</b></label>
    <input name="student_registration_no" type="text" placeholder="reg number" required><br/>
	
	<label for="email"><b>Email</b></label>
    <input name="email" type="text" placeholder="Enter Email" required><br/>
	
	<label for="username"><b>Username</b></label><br/>
    <input name="username" type="text" placeholder="Enter Username"  required><br/>
	
    <label for="password"><b>Password</b></label>
    <input name="password"type="password" placeholder="Enter Password"  required><br/>

    <label for="psw-repeat"><b>RepeatPassword</b></label>
    <input name="repeatpassword" type="password" placeholder="RepeatPassword"  required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button name="submit"type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="student-login.php">Sign in</a>.</p>
  </div>
</form>
		
	 <?php
   if (isset($_POST['submit']))
   {
	   $firstName=$_POST['firstName'];
	   $lastName=$_POST['lastName'];
	   $student_registration_no=$_POST['student_registration_no'];
	   $email=$_POST['email'];
	   $username=$_POST['username'];
	   $password=$_POST['password'];
	   $repeatpassword=$_POST['repeatpassword'];
	  
	   
	   if ($password==$repeatpassword){
		 $query=("SELECT *FROM student_registers WHERE ('password'='$password')");
		 $query_run=mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)>0)
		 {
			 echo'<script type="text/javascript"> alert ("user already exist.....try new email")</script>';
		 }
		 else{
			 $query= "insert into student_registers (firstName,lastName,email,student_registration_no,username,password,repeatpassword)
			 values ('$firstName','$lastName' ,'$student_registration_no','$email','$username','$password','$repeatpassword' )";
			  $query_run=mysqli_query($conn,$query);
			  if($query_run){
				  echo'<script type="text/javascript"> alert ("user registered ...... go to login")</script>';
				   header('location:student-login.php');
			  }else{
				   echo'<script type="text/javascript"> alert ("error!")</script>';
			  }
		 }
	   }else{  echo'<script type="text/javascript"> alert ("password and repeatpassword does not match")</script>';}
	   
	   
   }
   ?>
		
	
		
</body>
</html>
