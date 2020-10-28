	<?php
	global $conn;
	$conn = mysqli_connect("localhost","root","","picasso");
	    
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	?>