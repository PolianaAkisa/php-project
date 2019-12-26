<?php
require'process.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospital Registration Page</title>
	<link rel="stylesheet"  type="text/css" href="style6.css">
</head>
<body>



<form action="hosp-register.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="hospname"><b>Hospital Name</b></label>
    <input name="hospname" type="text" placeholder="Enter Hospital Name"required>

	<label for="email"><b>Email</b></label>
    <input name="email" type="text" placeholder="Enter Email" required><br/>
	
	
    <label for="password"><b>Password</b></label>
    <input name="password"type="password" placeholder="Enter Password"  required><br/>
	

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button name="submit"type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="hospital-login.php">Sign in</a>.</p>
  </div>
</form>
		
	 <?php
   if (isset($_POST['submit']))
   {
	   $hospname=$_POST['hospname'];
	   $email=$_POST['email'];
	   $password=$_POST['password'];
	 
	   
	  
	   
	   if ($password==$password){
		 $query=("SELECT *FROM hosp_registers WHERE ('password'='$password')");
		 $query_run=mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)>0)
		 {
			 echo'<script type="text/javascript"> alert ("user already exist.....try new email")</script>';
		 }
		 else{
			 $query= "insert into hosp_registers(hospname,email,password)
			 values ('$hospname','$email','$password' )";
			  $query_run=mysqli_query($conn,$query);
			  if($query_run){
				  echo'<script type="text/javascript"> alert ("user registered ...... go to login")</script>';
				   header('location:hospital-login.php');
			  }else{
				   echo'<script type="text/javascript"> alert ("error!")</script>';
			  }
		 }
	   }else{  echo'<script type="text/javascript"> alert ("password invalid")</script>';}
	   
	   
   }
   ?>