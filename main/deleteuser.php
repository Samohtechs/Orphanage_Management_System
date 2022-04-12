<?php
	include('../connection.php');
	$id=$_GET['id'];
	$result = $conn->prepare("DELETE FROM user WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("Location: users.php");
?>