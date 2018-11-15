<?php
// to show chatlogs on global chat

require'database.php';
$result1 = mysqli_query($mysqli,"SELECT * FROM logs ORDER BY id DESC limit 10");

while($extract = mysqli_fetch_array($result1)) {
	echo "<span id=user>" . $extract['firstname'] . "</span>: <span>" . $extract['msg'] . "</span><br>";
}
?>
