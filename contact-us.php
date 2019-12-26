<?php
//include('./includes/header.php');
require'contact-us-send.php';
?>
<!DOCTYPE html>
<html>
<body>
<h1>Contact us</h1>
<form action="contact-us-send.php" method="POST">
<ul>
	<li>
	<label for="name">Your name:</label>
	<input type="text" id="name" name="name"/>
	</li>
	<li>
	<label for="email">Your email:</label>
	<input type="text" id="email" name="email"/>
	</li>
	<li>
	<label for="comment">Your comment:</label>
	<textarea name="comment" id="comment"></textarea>
	</li>
	<li>
	<input type="submit" name="submit" value="Click to send your comments"/>
	</li>
</ul>
</form>
</body>
<?php
 //include('./includes/footer.php');
require'contact_us-send.php';
?>
</html>	