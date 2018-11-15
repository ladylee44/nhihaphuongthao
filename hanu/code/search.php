<?php include("header.php");?>
<html>
<body>

<?php
include("connect.php");
if(isset($_POST['submit'])){
	$sql="SELECT*
		  FROM article 	
		  INNER JOIN article_link ON article.link_id=article_link.link_id 
		   
		  WHERE article.title LIKE '%".$_POST['search']."%'
		";
	$query=$conn->prepare($sql);
	$query->execute();
	
	foreach ($query as $v) {
		

		$image= "anh/".$v["image"];
		$link=$v["link"];
		echo "<image src= ".$image." width='550'>  "."<br>";
		echo "<a href=".$v['link'].">".$v["title"]."</a> "."<br>" ;

	
}




}
?>

</body>
</html>
<?php
include("footer.php");
?>