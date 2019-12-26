<?php
    // initializing variables
    
    $appointment_student_firstname = "";
	$appointment_student_lastname = "";
    $registration_no = "";
    $university = "";
	$doctor_id = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', "", 'login');

    //MAKE A REPORT FORM SUBMISSION TO THE DATABASE
    #if the user clicks on submit
    if (isset($_POST['Save'])) {
        // 
        $appointment_student_firstname = mysqli_real_escape_string($db, $_POST['appointment_student_firstname']);
		$appointment_student_lastname = mysqli_real_escape_string($db, $_POST['appointment_student_lastname']);
        $registration_no = mysqli_real_escape_string($db, $_POST['registration_no']);
        $university = mysqli_real_escape_string($db, $_POST['university']);
		$doctor_id = mysqli_real_escape_string($db, $_POST['doctor_id']);
   

    // if there are no errors in the form
   
   

        $query = "INSERT INTO appointment(appointment_student_firstname,appointment_student_lastname,registration_no,university, doctor_id) 
		VALUES('$appointment_student_firstname','$appointment_student_lastname', '$registration_no','$university', '$doctor_id')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Your appointment will be posted in afew seconds";
        header('location: index.php');
    

		}

    
?>
<!--
   if (isset($_POST['submit']))
   {
	   $appointment_student_name=$_POST['appointment_student_name'];
	   $registration_no=$_POST['registration_no'];
	   $appointment_time=$_POST['appointment_time'];
	   $doctor_id=$_POST['doctor_id'];
	   
	  
	   
	   if ($password==$repeatpassword){
		 $query=("SELECT *FROM appointment WHERE ('')");
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
	