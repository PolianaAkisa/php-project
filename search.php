<?php
    $con=mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
    
    mysqli_select_db($con,"login") or die(mysqli_error($con));
   
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

    <?php
	$query = $_GET['query']; 
    
     
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
        
         
        $query = mysqli_real_escape_string($con,$query);
        
         
        $raw_results = mysqli_query($con,"SELECT * FROM registration
            WHERE (`lastname`='$query') ") or die(mysqli_error($con));
        
        if(mysqli_num_rows($raw_results) > 0){ 
             
            while($results = mysqli_fetch_array($raw_results)){
            
             
                echo "<p><h3>".$results['lastname']."</h3>".$results['firstname']."</p>";
             
            }
             
        }
        else{ 
            echo "doctor record not found";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }


?>

</body>
</html>