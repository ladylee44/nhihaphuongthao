<?php
require_once("includes/connect.php");
 
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "DELETE FROM user 
			WHERE id = $id";
	$query = mysqli_query($conn, $sql);
	header('Location: member.php');
}
 
 
?>