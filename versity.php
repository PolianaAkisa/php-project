<?php
require'server2.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>University Page</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

     
  <style type="text/css">
  body { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 0.8em; } 
</style>
  <style type="text/css">
      .width-wrapper { width: 960px; }
    body.two-sidebars #main-content { margin-left: -200px; margin-right: -300px;}
  body.sidebar-left #main-content { margin-left: -200px; }
  body.sidebar-right #main-content { margin-right: -300px; }
  body.two-sidebars #squeeze { margin: 0 300px 0 200px; }
  body.sidebar-left #squeeze { margin-left: 200px; } 
  body.sidebar-right #squeeze { margin-right: 300px; }
  #middle-wrapper .sidebar-left { width: 200px; }
  #middle-wrapper .sidebar-right { width: 300px; }
</style>
	

  	<script type="text/javascript">	  
      		
      		Cufon.replace('h1, h2, #site-name');
	  		
    </script> 
      		
	
  
</head>

<body class="sidebar-right">

  <div id="page-wrapper">

<!-- Header --> 
    <div id="header-wrapper" class="clear-block"><div class="width-wrapper">
    
              <div id="site-logo">
          <a href="/"><img src="logo.jpg" alt="UNIVERSITY OF NAIROBI" /></a>
        </div>
            
              <div id="site-name">
          <h1 class="site-name"><a href="/" class="sitename-heading">STUDENT MEDICAL HISTORY SYSTEM</a></h1>
         </div>
            
              <!--<div id="site-slogan">
          <h3></h3>            
        </div>-->
      
      <div id="menu-wrapper">      
        
        <div id="primary-links">
                      <div id="block-menu-primary-links" class="block-menu"><div class="block-inner">

      <h3 class="title">Primary links</h3>
  
  <div class="content">
    <ul class="menu"><li class="leaf first"><a href="student.php" title="">Students</a></li>
<li class="leaf last"><a href="reports.php" title="">View Reports</a></li>
</ul>  </div>

</div></div> <!-- /block-inner, /block -->                  </div>
        
        <div id="secondary-links">
           
        </div>
      
      </div>      
    
    </div></div><!-- /header-wrapper -->


<!-- Navigation Links -->
    <div id="navigation-links" class="clear-block"><div class="width-wrapper clear-block">	
               <div id="block-menu-menu-mainmenu" class="block-menu"><div class="block-inner">

      <h3 class="title">Main Menu</h3>
  
  <div class="content">
    <ul class="menu"><li class="leaf first active-trail"><a href="/" title="" class="active">HOME</a></li>
<li class="expanded"><a href="/register" title="">ONLINE REGISTRATION</a>
<ul class="menu"><li class="leaf first"><a href="register2.php" title="doctors only">Doctor registration</a></li>
<li class="leaf"><a href="register.php" title="students only">Student registration</a></li>
<li class="leaf last"><a href="versity-register.php" title="universities only">University registration</a></li>
</ul></li>
<li class="expanded"><a href="/services" title="">SERVICES</a>
<ul class="menu"><li class="leaf first"><a href="/uploads" title="">Student Forms</a></li>
<li class="leaf last"><a href="reports.php" title="">Student Reports</a></li>

</ul></li>

<li class="expanded"><a href="about-us.php" title="About us">ABOUT US</a>
<li class="expanded"><a href="contact_us.php" title="Contact us">CONTACT US</a>
<li class="expanded"><a href="index7.php" title="Back">LOGOUT</a>
  </div>

</div></div> <!-- /block-inner, /block -->                   <!--  <div id="search-box" class="clear-block">
              
          </div> -->
		    
                        <div class="input-group">
	<form action="srch.php" method="GET">
    <input type="text" name="query" placeholder="search Student id No."/>
    <input type="submit" value="Search" />
	<div class="input-group-btn">
		<!--<button class="btn btn-default" type="submit"></button>-->
		</div>
                        
          <div class="rss">
            <a href="/rss.xml"><img src="/sites/all/themes/uonbi/images/rss.png" alt="RSS Icon" /></a>
          </div>
		   <div class="twitter">
            <a href="http://www.youtube.com/user/UniverstiyofNairobi"><img src="/sites/all/themes/uonbi/images/youtube-small.png" alt=" Icon" /></a>
          </div> 
		  
          <div class="twitter">
            <a href="http://twitter.com/uonbi"><img src="/sites/all/themes/uonbi/images/twitter.png" alt="Twitter Icon" /></a>
          </div> 
            <div class="twitter">
            <a href="http://www.facebook.com/pages/University-of-Nairobi/376879312704"><img src="/sites/all/themes/uonbi/images/fb.png" alt="FaceBook Icon" /></a>
          </div>  
            <div class="twitter">
            <a href="http://instagram.com/universityofnairobi?ref=badge" class="ig-b- ig-b-16"><img src="//badges.instagram.com/static/images/ig-badge-16.png" alt="Instagram" /></a>
          </div>            
             
          </div></div>
    
         <!-- <div id="splash" class="clear-block"><div class="width-wrapper"><div class="splash-inner">	
        <div id="block-ddblock-1" class="block-ddblock"><div class="block-inner">-->
		<div class="medic-image">
		
		<h1>Recent Reports Posted</h1>
		<?php
$db=mysqli_connect('localhost','root',"",'login');
//if ($con->connect_error)
{
	/*die("connection failed:" .$con->connect_error);*/ $con=mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysqli_error());
    
    //mysqli_select_db($con,"login") or die(mysqli_error($con));
}
		
		$ReportMade="SELECT student_registration_no,student_firstname,student_lastname,examined_by,date_time,description FROM report ORDER BY 'report_id' DESC";
		$result=$db->query($ReportMade);
		
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc())
			{
				echo"<div class='input-form'>" .$row["date_time"]."<br>"."<br>"."Student registration number:" .$row["student_registration_no"]."<br>"."Student Firstname:" .$row["student_firstname"]."<br>"."Student Lastname:" .$row["student_lastname"]."<br>"."<br>"."Examined by:" .$row["examined_by"]."<br>"."Description:" .$row["description"]."<br>"."<br></div>";
				echo"<hr>";
			}
		}
		else
		{
			echo"No recent reports made";
		}
?>
</div>
</div>
			
			

</body>
</html>