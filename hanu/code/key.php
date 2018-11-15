<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=2");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
?>