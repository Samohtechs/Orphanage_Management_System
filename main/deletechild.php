<?php
	include('../connection.php');
	$id=$_GET['id'];
	$result = $conn->prepare("DELETE FROM children WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("Location: childrens.php");
?>