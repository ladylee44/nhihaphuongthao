<?php
// to insert messages in the global chat table

session_start();
$postData = file_get_contents("php://input") ;
header("Content-Type: text/html; charset=utf-8");
$uname = $_SESSION['firstname'];
$msg = $_REQUEST['msg'];
$from = array("%26", "[sun]","<3","[snow]","[star]",":)",":(");
$to   = array("&#38", "&#9728;;", "<span class=heart>&#10084;</span>","<span class=snow>&#10052;<span>","<span class=star>&#9885;</span>","<span class=smile>&#9786;</span>","&#128542;");
$message = str_replace($from, $to, $msg);

require'database.php';
$query = "INSERT INTO `logs` (`firstname`, `msg`) VALUES ('$uname','$message')";
mysqli_query($mysqli,$query);

$result1 = mysqli_query($mysqli,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['firstname'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
?>
<html>
<head>
<title>Facebook</title>
<meta charset="UTF-8">
</head>
</html>