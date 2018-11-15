<?php include("header.php");?>

<table width="600" height="400" align="center" >
	<tr>
		<td>
	<h1>Thật đáng buồn với ý thức một bộ phận các bạn sinh viên</h1>
	<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=12");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://en.wikipedia.org/wiki/Americas' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
	<i align="justify">Ở bài báo này, chúng tôi- những sinh viên vô cùng yêu quý mái trường của mình muốn lên tiếng và nhắc nhở các bạn sinh viên không biết vô tình hay cố tình vứt rác bừa bãi ra sân trường</i>
	<p align="justify">
		Các bạn ơi, những chiếc thùng rác xanh xanh được nhà trường đầu tư và đặt quanh khuôn viên trường kia đang rất đói và chúng cần được ăn, tại sao các bạn không cho chúng ăn mà lại để rác đi tưới cây, đi trên sân trường như vậy. Hơn nữa, những chú thùng rác sẽ buồn thế nào khi chúng chưa hoàn thành được trách nhiệm của mình là đựng rác mà lại để các bạn của chúng là bồn cây, là ghế gỗ, là đường đi... phải làm thay. Các bạn đang làm tổn thương các chú thùng rác đấy, 1 số Hanuers ạ! Không chỉ có vậy việc vút rác bừa bãi còn làm cho công việc của các bác lao công trở nên khó khăn hơn, tính thẩm mỹ của ngôi trường giảm đi và tác phong của chính con người bạn luộm thuộm đi nhiều phần. Vì vậy bạn và tôi hãy cùng nhau xây dựng một môi trường văn minh, văn hóa, sạch đẹp bạn nhé!<br><br>
		<i>Một số hình ảnh rác thải nằm ngổn ngang được các phóng viên thu lại</i><br>
		<img src="anh/a3.jpg" width="600" height="700"><br><br>
		<img src="anh/a4.jpg" width="600" height="700"><br><br>
		<img src="anh/a5.jpg" width="600" height="700"><br><br>
		<img src="anh/a7.jpg" width="600" height="700"><br><br>
	</p>
	<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=12");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
?>
</td>
</tr>
</table>
<?php 
include("comment.php"); 
	   if ( isset ($_POST["sub"]) && isset($_SESSION['username'])) {
			$user="SELECT*FROM user
		      	 WHERE username= '".$_SESSION["username"]."'  ";
			$qUser=$conn->prepare($user);
			$qUser->execute();
			foreach ($qUser as $k) {
			
		
				$cmt = $_POST["content"];
 				$user_id = $k["userid"];
 		
				$sql = "INSERT INTO comment (cmt, article_id,user_id) 
		       			 VALUES ( '$cmt', '12' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=12");
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
		if(!isset($_SESSION['username']) && isset($_POST['sub'])){
			echo "<h3 style=color:red>Xin vui lòng đăng nhập để bình luận</h3>";

		} 
      include("footer.php");?>
</body>
</html>