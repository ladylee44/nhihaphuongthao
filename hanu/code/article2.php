
		
	<?php include("header.php");?>
<table width="600" height="400" align="center" >

	<div class="a">
		<tr>
	<td>
		<h1>Sân vận động Hanu: Nơi tình yêu thăng hoa</h1>
		<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=7");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://abcnews.go.com/' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
		<i align="justify">Có người đã từng nói với tôi rằng: <quote> “Trong ví tiền không nhất định là phải có tiền, Trong áo ngưc không nhất thiết là phải có ngực…”</quote>.</i><br>
		<p align="justify">
		 Từ câu nói ấy của bậc tiền bối đi trước tôi mới nghiệm ra rằng “ Vào sân vận động Hanu không nhất thiết phải vận động thể dục thể thao”.<br>
		 Đồng suy nghĩ với tôi, trong rất nhiều tháng trở lại đây, đặc biệt trong những ngày đông lạnh giá, những trưa mùa xuân gió thổi đìu hiu, những buổi xế chiều yên ả, thanh bình, rất nhiều học sinh, sinh viên tứ xứ đổ về những chiếc ghế đá trong sân vận động Hanu để tâm sự tuổi thần tiên.<br>
		 <img src="anh/c.jpg" width="600" height="400"><br>
		 <small>"Ảnh minh họa"</small><br><br>
		 <small>Ghế đá chuyên dụng-Hanu</small><br><br>
		 Nhìn những ánh mắt e thẹn, những nụ cười chúm chím, những chiếc véo má nhẹ mà đau hết hồn của những cặp đôi đang yêu nhau tôi cảm thấy thật vui, thật sung sướng và thật biết ơn Hiệu trưởng Hanu, ban ngoại gioa, ban tài chính, ban kế toán, các nhà đầu tư đã giúp Hanu có một chiếc sân vận động xinh xắn, thoáng mát, nơi chắp cánh cho những chuyện tình đẹp đẽ tuổi sinh viên.</p>
		<img src="anh/a1.6.jpg" width="600" height="400"><br>
		<small>Sân vận động Hanu nhìn từ ngoài vào</small><br><br>
		<img src="anh/a1.7.jpg" width="600" height="400"><br>
		<small>Sân cỏ Hanu</small><br><br>
	    </p>
	    <?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=7");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
?>
	</td>
</tr>
</div>

				


		
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
		       			 VALUES ( '$cmt', '7' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=7");
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
 	include("footer.php");
 ?>
</body>
</html>