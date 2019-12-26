<?php
    // initializing variables
    $student_registration_no = "";
    $student_name = "";
    $examined_by = "";
    $description = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', "", 'login');

    //MAKE A REPORT FORM SUBMISSION TO THE DATABASE
    #if the user clicks on submit
    if (isset($_POST['submit-report'])) {
        // 
        $student_registration_no = mysqli_real_escape_string($db, $_POST['student_registration_no']);
        $student_firstname = mysqli_real_escape_string($db, $_POST['student_firstname']);
		$student_lastname = mysqli_real_escape_string($db, $_POST['student_lastname']);
        $examined_by = mysqli_real_escape_string($db, $_POST['examined_by']);	
		$description = mysqli_real_escape_string($db, $_POST['description']);
   

    // if there are no errors in the form
   
   

        $query = "INSERT INTO report(student_registration_no, student_firstname,student_lastname, examined_by,description) VALUES('$student_registration_no', '$student_firstname','$student_lastname', '$examined_by', '$description')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Your report will be posted in afew seconds";
        header('location: versity.php');
    

		}

    
?>