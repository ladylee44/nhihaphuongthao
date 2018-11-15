
<?php include("header.php");?>	

<table width="500" height="400" align="center">
<?php
	include("connect.php");
	if (isset($_POST['submit'])) {
		
			$categoryId = $_POST["categoryid"];
			
			$articleList= $conn->prepare("SELECT article.article_id,article.link_id, article.title, article_link.link, article.image
											FROM article
											INNER JOIN article_link
											ON article.link_id= article_link.link_id
											WHERE article.category_id=$categoryId");

			$articleList->execute();

			foreach($articleList as $v) { 
			 echo "<tr>";
			 echo "<td>"."<a href='".$v["link"]."'><img src='".'anh/'.$v["image"]."' width='500' height='400'></a>"."<br>";
			 echo "<a href= ' ".$v["link" ]."'>".$v["title"]." </a>"."<br>"."<br>"."</td>";
			 echo "</tr>";

			}

		}
	
		

	?>
</table>
<?php 

      include("footer.php");?>										
</body>
</html>