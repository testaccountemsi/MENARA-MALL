
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>


<?php error_reporting(0); ?>
	<center>
	
		<form method="post" action="$PORTAL_ACTION$" >
			
<p>
			<label for="firstName">Nom:</label>
			<input type="text" name="name" id="firstName">
			</p>

	
<p>
			<label for="emailAddress">Email:</label>
			<input type="text" name="email" id="emailAddress">
			</p>
			<input name="redirurl" type="hidden" value="www.google.com">
   
			 <input name="accept" type="submit" value="Envoyer" >
		
		</form>

		
     
		<?php

$conn = mysqli_connect("localhost", "root", "", "wifiusers");


if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO users VALUES ('$name','$email')";

if(mysqli_query($conn, $sql)){
	

	
} else{
	echo "ERROR!  $sql. "
		. mysqli_error($conn);
}

mysqli_close($conn);
?>
    
	</center>
	
</body>
</html>
