 <?php
 require_once 'login_info.php'
$con = mysqli_connect($hostname,$user,$pwd) or die("Unable to connect");
mysqli_select_db($con,'studentmedicalsystemdb');
?> 