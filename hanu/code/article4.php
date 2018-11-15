
		<?php include("header.php");  ?>
<table width="500" height="400" align="center" >

	<font face="Times New Roman">
		<tr>
			<td>
		<h1>Tiếng hét lạ trong nhà vệ sinh</h1>
		<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=8");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://edition.cnn.com/' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
		<i align="justify">Vào hồi 19 giờ ngày 14/4/2018, tất cả đồng loạt các học viên Hita đang ngồi học tại p407 nhà C chăm chú thì bỗng...</i><br>
		<img src="anh/v1.jpg" width="500" height="600"><br>
		<small>Quang cảnh nơi diễn ra vụ án</small>
		<p align="justify">
			Lúc ấy, tất cả mọi người ai nấy đều sởn gai ốc, tóc gáy dựng ngược, và quay ra hỏi nhau: <i>Mày có nghe thấy tiếng gì không?</i> Theo lời kể lại lúc ấy từ hường nhà vệ sinh sảnh C, họ bắt đầu nghe thấy những tiếng kêu kinh dị: <i>“Fuck, fuck, fuck”, “con dog này”…</i><br>
			Lần theo dấu vết, nhóm phóng viên chúng tôi đã tìm ra một sự thật hết sức giải trí.<br>
			Hôm đó (18h giờ 50 phút cùng ngày) chị Huyền đã rủ chị Hoa đi WC cùng. Ban đầu chị Hoa tỏ ra rất vui vẻ và nhiệt tình. Nhưng sau đó vài phút, khi chị Huyền bước  vào buồng WC chị Hoa đã nảy sinh ý định tồi tệ. Ngay lập tức chị đã biến suy nghĩ thành hành động, đợi khoảng 5s để chị Huyền ngồi yên vị, chị Hoa đã ra tay hết sức tàn nhẫn. Chị tắt điện nhà vệ sinh tối om và chạy ra ngoài với tốc độ ánh sáng, như 1 chú cún bị động đực bỏ lại chị Huyền với những tiếng cầu cứu thất thanh. Đừng như chị Hoa!<br>
		<img src="anh/v.jpg" width="500"height="600"><br>
		<small>Hiện trường vụ án</small><br><br>
		<img src="anh/v2.jpg" width="500" height="500"><br>
		<small>Thủ phạm xấu xa</small><br><br>
		<img src="anh/v3.jpg" width="500" height="650"><br>
		<small>Nạn nhân tội nghiệp</small><br>
		</p>
		<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=8");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
?>
	</td>
	</tr>
	</font>
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
		       			 VALUES ( '$cmt', '8' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=8");
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