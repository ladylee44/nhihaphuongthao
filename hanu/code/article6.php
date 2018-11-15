<?php include("header.php");?>	

<table width="600" height="400" align="center" >
	<tr>
		<td>

	<h1>Hanu Guitar Club (HGC) cháy hết mình trong buổi Opening Day</h1><br>
	<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=10");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='http://www.bbc.com/news' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
	<i align="justify">Ngày 19/9, CLB Hanu Guitar Club (HGC) đã tổ chức buổi Opening Day thành công rực rỡ và để lại ấn tượng khó phai cho các bạn sinh viên tham gia buổi Opening Day này.</i><br>
	<p align="justify">
		Ngay sau buổi “ra mắt” đáng nhớ của CLB HMC (Hanu Music Club), CLB HGC (Hanu Guitar Club) cũng “trình làng” nhằm “chiêu mộ gen mới” trong năm học 2017. Mở đầu buổi Opening day là ca khúc “Adventure of a lifetime” được thể hiện bởi 4 anh chàng vô cùng đẹp trai, đáng yêu của HGC. Tiếp sau đó, MC giới thiệu ban Chủ nhiệm và vài nét về câu lạc bộ để các bạn sinh viên có cái nhìn rõ ràng hơn về HGC cũng như những con người có đóng góp không nhỏ tạo nên cái tên Hanu Guitar Club.<br><br>
		<img src="anh/e1.jpg" width="600" height="400">
	</p>
	<p align="justify">
		Các thành viên trong CLB đã mang đến những tiết mục, bài hát vô cùng đặc sắc để “lấy lòng” các bạn, các em đang hứng thú “nhắm tới” vị trí thành viên trong CLB HGC như:  Ngày mai em đi, Phố thị, Chiếc lá đầu tiên, Và cơn mưa tới, Sắc màu, Cũng đành thôi, Con đường tình yêu, Đoán tên bài hát,…<br><br>
		<img src="anh/e2.jpg" width="600" height="400"><br><br>
		<img src="anh/e3.jpg" width="600" height="400">
	</p>
	<p align="justify">
		Bên cạnh đó hàng loạt các ca khúc US, UK cũng được HGCers cover lại như: “Paper hearts”, “Fly me to the moon”, “Lucky”, “Just a kiss”, “Make you feel my love”, “I know what you did last summer”, “Issues”,…<br><br>
		<img src="anh/e4.jpg" width="600" height="400"><br><br>
		<img src="anh/e5.jpg" width="600" height="400">
	</p>
	<p align="justify">
		Với sự chuẩn bị, đầu tư kĩ lưỡng, buổi Opening Day của CLB HGC đã đem đến cho các bạn sinh viên (đặc biệt là khóa 2017) những trải nghiệm vô cùng thú vị.<br><br>
		Chúng ta cùng xem thêm một vài bức ảnh khác dưới đây nhé!<br><br>
		<img src="anh/e6.jpg" width="600" height="400"><br><br>
		<img src="anh/e7.jpg" width="600" height="400">
	</p>
	<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=10");

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
		       			 VALUES ( '$cmt', '10' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=10");
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