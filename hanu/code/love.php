<?php
	include("header.php");?>
			
	<table width="500" height="400" align="center">

<?php
	
	include ("connect.php");
	$tag= $conn -> prepare("SELECT article.article_id, article.title,article.image,article.link_id,article_link.link_id,article_link.article_id,article_link.link,keyword.link_id,keyword.keyword,keyword.article_id 
							FROM article 	
							INNER JOIN article_link ON article.link_id=article_link.link_id 
							INNER JOIN keyword ON article.link_id=keyword.link_id 
							WHERE keyword.keyword LIKE '%tình yêu'
");
	$tag->execute();
	echo "<font color='red' align='center'>"."<h1>"."<i>"."Bài viết liên quan"."</i>"."</h1>"."</font>";
	foreach ($tag as $val){
		echo "<tr>";
		echo "<td>"."<a href='".$val[6]."'><img src='"."anh/".$val[2]."' width='500' height='400'></a>"."<br>";
		echo "<a href= '".$val[6]."'>"."$val[1]"."</a>"."<br>"."</td>";
		echo "</tr>";
	}
?>

<?php
include("footer.php"); 

     ?>  
		
</body>
</html>