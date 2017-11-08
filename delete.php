<?php
	require_once 'dbconfig.php';
	$id=$_POST['mid'];
	$sql="delete from members where id=$id";
	echo $sql;
	$q = $conn->query($sql);
	$conn->close();
?>