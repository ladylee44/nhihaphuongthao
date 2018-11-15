<?php include("header.php") ?>
<table width="600" height="400" align="center" >

	<font face="Times New Roman">
		<tr>
			<td>
		<h1>Vén bức màn sự thật đằng sau quán bún, cháo “cứt chuột”</h1>
		<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=2");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://en.wikipedia.org/wiki/New_York_City' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
		<i >Chắc hẳn, bạn đọc đăng thắc mắc tại sao lại dùng từ cứt chuột khi đề cập đến một quán ăn cho sinh viên thì ngay sau đây chúng tôi xin phơi bày cho các bạn một sự thật hết sức chân thật, trần chuồng và đáng sợ.</i>
		<p align="justify">
			Vâng, quán ăn tổng hợp bún, cháo, bánh mì, chè, sinh tố nằm ở ngay đoạn đầu ngõ A4 trường đại học Hà Nội hiện nay đang được các sinh viên Hanu nhắc đến với những cái tên hết sức ngộ nghĩnh, hóm hỉnh như: “quán cứt chuột”, “quán cứt chim”, “quán ăn chửi”…Bởi lẽ, sau 1 dịp food tour vòng quanh Hanu, tình cờ và bất ngờ, 1 tester kém may mắn nào đó đã suýt được thưởng thức một bát cháo sườn sụt mix cứt chuột. Và từ đó quán bún cứt chuột ra đời.<br>
			<img src="anh/c1.jpg" width="600" height="700"><br>
			<small>Biển quảng cáo của quán</small><br><br>
			<img src="anh/c2.jpg" width="600" height="500"><br>
			<small>Phía ngoài quán bún cháo</small><br>
		</p>
		<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=2");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
?>
	</td>
</tr>
	</font>
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
		       			 VALUES ( '$cmt', '2' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=2");
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