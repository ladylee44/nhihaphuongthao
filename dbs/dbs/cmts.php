<?php
include ("includes/connect.php");
$usercmt=$conn->prepare("SELECT *
		  FROM comment
		  INNER JOIN user ON comment.user_id=user.userid
		  WHERE comment.cntid=1");
$usercmt->execute();
echo "<h4>Tất cả bình luận</h4>";
foreach ($usercmt as $item){
	echo "<img src='anh/".$item['Avatar']."' wight='30' height='30' ";
	echo "<br>";
	echo "<b>"."$item[username]"."</b>";
	echo "<br>";
	echo $item["cmt"];
	echo "<br>"."<br>";
}
?>