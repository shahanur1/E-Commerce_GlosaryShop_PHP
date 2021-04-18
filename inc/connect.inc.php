<?php
	//connect to mysql database
	$servername="localhost";
	$username="root";
	$password="";
	$database="grocerydb";
	$db=mysqli_connect($servername,$username,$password,$database);

	if(!$db){
		die("Error in connection".mysqli_connect_error());
	}
?>