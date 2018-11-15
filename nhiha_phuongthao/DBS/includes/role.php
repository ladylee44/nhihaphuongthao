<?php
if (isset($_SESSION['id']) == false) {
	// check for login
	header('Location:login.php');
}else {
	if (isset($_SESSION['role']) == true) {
		$role = $_SESSION['role'];
		if ($role == '1') {
			echo "Admin only !<br>";
			echo "<a href='index.php'> Go back</a>";
			exit();
		}
	}
}
?>