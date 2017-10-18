<?php

	$servername="127.0.0.1";
	$username="root";
	$password="";
	$db="cruddata";
	$conn= new mysqli($servername,$username,$password,$db);
	if(!$conn->connect_error){
		die("connection Faile".mysqli_connect_error());
	} 
	//echo "Connection Success";
	
?>