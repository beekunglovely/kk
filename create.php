<?php
require_once 'dbconfig.php';
	//echo $_POST['id']."<br>";
	//echo $_POST['fname']."<br>";
	//echo $_POST['lname']."<br>";
	//echo $_POST['contect']."<br>";
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname =$_POST['lname'];
	$contect=$_POST['contect'];
	
	$sql = "INSERT INTO  members(id,fname,lname,contact) VALUE($id,'$fname','$lname','$contect')";
	//echo $sql;
	$result = $conn->query($sql);
	if($result==TRUE){
		header("Location: http://localhost/crud/");
	}else{
		echo 'faile';
	}
	
	
?>