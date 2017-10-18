<?php
	require_once 'dbconfig.php';
	
	
	$sql = "SELECT * FROM members";
	$result = $conn->query($sql);
	//var_dump($result);
	while($row = $result->fatch_assoc()){
		var_dump($row);
		echo $row['id'].":".$row['fname'].":".$row['lname'].":".$row['contact']."<br/>";
		
	}
	$conn->close();
	
?>