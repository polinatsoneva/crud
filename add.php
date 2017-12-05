<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
   
 if(mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')"))
			 {
			  ?>
					<?php
					echo "You have been registered";

					echo "<script>setTimeout(\"location.href = 'pages/index.php';\",1500);</script>";

					?>
					<?php
			 }
			 else
			 {
			  ?>
					<script>alert('error while registering you...');</script>
					<?php
			 }
}
?>
