<?php
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	mail('example@example.com' ,'Sample Contact us Form',$msg);
	header('location:contact-us-thank-you.php');
}

else{
	header('location:contact-us.php');

}


?>
<?php
if(isset($_POST['sendmail'])){
 if mail($_POST['email'],'Appreciation','Hello there');
 
    echo "sent successful";
    }else {
    echo "failed"; 
    }
}
?>