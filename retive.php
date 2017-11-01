<?php
 require_once 'dbconfig.php';
 
 $sql = "select * from members ";
 $result = $conn->query($sql);
 $data = [];
 while($row = $result->fetch_assoc()){
	// echo $row['id']." / " . $row['fname']." : " .$row['lname']." : " 
	 $data[]=array($row['id'],$row['fname'],$row['lname'],$row['contact']);
 }
 //echo "<br>";
  //var_dump($data);
  //echo json_encode($data);
 $conn->close();
?>