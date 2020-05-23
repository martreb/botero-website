<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	
	$link = mysqli_connect("localhost", "root", "", "mysql");
	
	// check connection
	
	if($link === false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_errno()); 
	}
	
	// You can post things to a database by using the same commands you use in 
	// mysql. This php code will insert names and passwords into a table 
	// called users which is a mysql table that I created previously 
	// the values are pulled from the post in the HTML forms document
	
	$sql = "INSERT INTO names (firstName, lastName) VALUES ('$_POST(firstName)','$_POST(lastName)')";
	
	if(mysqli_query($link, $sql))
	{
		echo "Records inserted successfully."; 
	}
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
	// close connection
	
	mysqli_close($link);
?>
<hr>
<a href = "login.html">Back</a> 