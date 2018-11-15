
<?php include("header.php");?>	
<table width="450" height="400" align="center" >

	<div class="d">
	<p><font face="Times New Roman">
		<tr>
		<td>
	<h1>Founders của Hanu Dispatch: Tài năng, xinh đẹp, đặc biệt biết nhiều ngoại ngữ.</h1>
	<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=1");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://edition.cnn.com/' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}

	?>
	<i align="justify">Sau bao công sức săn đón cuối cùng các phóng viên của Hanu đã có cơ hội gặp gỡ và trò chuyện cùng 2  nhân vật huyền thoại đã sáng lập ra Hanu Dispatch</i><br>
	<h2>Ngọc Huyền: Cô gái đầy cá tính và sự tự tin</h2>
	<img src="anh/a1.1.png" width"400" height="400">
	<p align="justify">
		Chắc hẳn các độc giả trung thành của Hanu Dispatch không còn xa lạ gì với vẻ đẹp nghiêng nước nghiêng thành, hoa hờn nguyệt dỗi của Ngọc Huyền (Bẹp sony).
		Khuôn mặt cô là sự kết hợp hoàn hảo giữa sự ngọt ngào, trong trẻo của người dân châu Á và nét sang chảnh, quý tộc của quý cô phương Tây.<br> Không chỉ xinh
	    đẹp, Bẹp còn khiến người hâm mộ xuýt xoa vì viết thành thạo 5 loại ngôn ngữ lập trình và nói sành sỏi 11 ngôn ngữ trên thế giới.<br> 
	    Không dừng lại ở đó, Bẹp còn nổi tiếng với rất nhiều tài lẻ như: nhảy như một dancer, diễn xuất như 1 actress và hát như 1 singer.</p>
	<h2>Thanh Hoa: Cô gái mang vẻ đẹp lạ và mạnh mẽ</h2>
	<img src="anh/a1.2.jpg" width"400" height="400" >
	<p align="justify">
		Nhìn Hoa lần 1, nhìn Hoa lần 2, rồi lại nhìn hoa lần nữa, cuối cùng người hâm mộ cũng phải thốt lên rằng Ôi, một vẻ đẹp thật lạ.<br>
	    Không thua kém gì Bẹp, Thanh Hoa có trong tay 4 loại ngôn ngữ lập trình và bắn liên thanh 8 ngôn ngữ loài người.<br> 
	    Vì tính cách mạnh mẽ, độc lập có phần man rợ đến bây giờ Hoa vẫn chưa 1 lần pháo nổ, chưa 1 lần nắm cổ tay ai.</p>
	<p ><i>Cùng nhìn ngắm lại hình ảnh của 2 nàng Founders xinh đẹp bạn nhé!</i></p>
	<img src="anh/a1.3.jpg" width"450" height="300"><br><br>
	<img src="anh/a1.5.jpg" width="450" height="300"><br><br>
	<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=1");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
?>
</td>
</tr>
	</font>
	</p>
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
		       			 VALUES ( '$cmt', '1' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=1");
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




?>

		
<?php include("footer.php");?>
</body>
</html>