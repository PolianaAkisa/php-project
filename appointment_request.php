<?php
            // check the input
            //is_numeric($_GET['id']) or die("invalid URL");

            require( 'appointment.php');

            /*$stmt = $db->prepare('SELECT * FROM appointment WHERE appointment_id = :id');
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            $event = $stmt->fetch();*/
		?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Request an Appointment</title>
		<link rel="stylesheet" type="text/css" href="style6.css">
        <!--<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>-->

    </head>
    <body>
        <h1>Request an Appointment</h1>
        
        <form class="input-form" action="appointment_request.php" method="POST">
                        
			
			<div>
            <input type="text" class="input" name="appointment_student_firstname" placeholder="Your First Name" /></div><br>
			
			<div>
            <input type="text" class="input" name="appointment_student_lastname" placeholder="Your Last Name" /></div><br>

            <div>
            <input type="text" class="input" name="registration_no" placeholder="Registration number"  /></div><br>

            <div>
            <input type="text" class="input" name="university" placeholder=" Which University" /></div>
			<br>

            <div>
            <input type="text" class="input" name="doctor_id" placeholder="Doctor" /></div>

           <input type="submit" value="Save" class="form-submit" name="Save" /> <a href="#" id="cancel">Cancel</a>
        </form>

       <!-- <script type="text/javascript">

        $("#f").submit(function () {
            var f = $("#f");
            $.post(f.attr("action"), f.serialize(), function (result) {
                DayPilot.Modal.close(result);
            });
            return false;
        });

        $("#cancel").click(function() {
            DayPilot.Modal.close();
            return false;
        });

        $(document).ready(function () {
            $("#name").focus();
        });

        </script>-->
    </body>
</html>
