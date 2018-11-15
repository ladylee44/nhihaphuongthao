<html>

<body>
<table width="550" >
	<?php
		include ("connect.php");
		$articlelist= $conn->prepare("SELECT article.article_id,article.link_id, article.title, article_link.link, article.image
											FROM article
											INNER JOIN article_link
											ON article.link_id= article_link.link_id
											WHERE last_time_updated BETWEEN CAST('2018-04-01' AS DATE) AND CAST('2018-05-31' AS DATE)");

			$articlelist->execute();
			echo "<tr>";
			echo "<td>"."<h1>"."<i>"."<font color='red'>Tin tức nóng hổi vừa thổi vừa xem!!!"."</font>"."</i>"."</h1>"."</td>";
			echo "</tr>";

			foreach($articlelist as $va) { 
			 echo "<tr>";
			 echo "<td>"."<a href='".$va["link"]."'><img src='".'anh/'.$va["image"]."' width='550' height='400'></a>"."<br>";
			 echo "<a href= ' ".$va["link" ]."'>".$va["title"]." </a>"."<br>"."<br>"."</td>";
			 echo "</tr>";
}
	?>
</table>
</body>
</html>