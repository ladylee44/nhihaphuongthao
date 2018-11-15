<html>
<head></head>
<body>
	<form  method="post" >
	<table width="500" height="400" align="center">
		<?php
			include ("connect.php");
		
			$userpost= $conn->prepare("SELECT*
									   FROM `article` 
									   INNER JOIN user
									   ON article.author_id=user.userid
									   WHERE last_time_updated BETWEEN CAST('2018-05-15' AS DATE)
									   AND CAST('2018-12-31' AS DATE)");

			$userpost->execute();
			echo "<tr>";
			echo "<td>"."<h2>"."<i>"."<font color='red'>Tổng hợp tin ngắn"."</font>"."</i>"."</h2>"."</td>";
			echo "</tr>";
			

			foreach($userpost as $i) { 
			 echo "<tr>";
			 echo "<td>"."<h4>"."$i[title]"."</h4>"."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."<font color='grey'>"."$i[last_time_updated]"."</font>"."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>Tác giả: ".$i['username']."</td>";

			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."$i[content]"."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 echo "<td>"."<img src='anh/".$i['image']."' alt='Loadinggg...' width=350px>"."</td>";
			 echo "</tr>";
			 echo "<tr>";
			 ?>
			 <td><a href="cmtpost.php?blid=<?php echo $i["article_id"]?>">Bình luận</td>

			 <?php
			 echo "</tr>";
			 if(isset($_SESSION['username']) && $_SESSION['username'] == $i["username"]){
			 ?>
			 <td colspan='2' align="right">
			 	<a href="suapost.php?suaid=<?php echo $i['article_id']?>">Sửa</a> | 
			 	<a href="xoapost.php?xoaid=<?php echo $i['article_id']?>" 
					   onclick="return confirm('Bạn có chắc chắn muốn xóa');">Xóa</a></td>
			<?php
		}
			 echo "</tr>";


}
	?>

</table>

</form>
</body>
</html>