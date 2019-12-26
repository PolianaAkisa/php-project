<?php
session_start();
require 'process.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hospital Login Page</title>
	<link rel="stylesheet"  type="text/css" href="style6.css">
</head>
<body>

<h2>Modal Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button><br>




<div id="id01" class="modal">
  
  <form class="modal-content animate" action="hospital-login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images.png" alt="images" class="images">
    </div>

    <div class="container">
      <p><label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter email" id="user" name="email"/>
		</p>
      
	  <p><label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="pass" name="password"/>
	  </p>
		
        <p>
      <button name= "login" type="submit" value="Login">Login</button>
	   </p>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
  <?php
   if (isset($_POST['login']))
   {
	   $email=$_POST['email'];
	   $password=$_POST['password'];
		 $query="select *from hosp_registers WHERE email='$email' AND password='$password'";
		 $query_run=mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)>0)
		 {
			//valid
			$_SESSION['email']=$email;
			header('location:reports.php');
		 }
		 else{	
				//invalid
				  echo'<script type="text/javascript"> alert ("invalid credentials")</script> ';

}	}
   ?>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
