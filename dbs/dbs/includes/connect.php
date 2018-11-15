<?php
	// Kết nối MySQLi Object oriented
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "dbsnews";

	// Tạo kết nối
	$conn = new mysqli($servername, $username, $password, $database);

	// Kiểm tra kết nối có hoạt động không
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo " ";
?>
