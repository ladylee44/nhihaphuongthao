
<?php include("header.php");?>	

<table width="600" height="400" align="center" >
	<tr>
		<td>

	<h1>Hanuers và chương trình tham quan, tìm hiểu PVcomBank</h1>
	<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=9");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://abcnews.go.com/' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
	<i align="justify">Thứ Năm, ngày 16 tháng 11 vừa qua, Phòng Công tác sinh viên và Quan hệ doanh nghiệp Đại học Hà Nội đã tổ chức chương trình “Tham quan, tìm hiểu doanh nghiệp” cho sinh viên hệ đào tạo chính quy tại ngân hàng PVcomBank…</i>
	<p align="justify">
		Chương trình “Tham quan, tìm hiểu doanh nghiệp” nằm trong chuỗi các chương trình ngoại khóa tự chọn dành cho sinh viên hệ đào tạo chính quy đã nhận được sự chú ý của đông đảo sinh viên trong trường. Sau khách sạn Melia, ngân hàng PVcomBank trở thành điểm đến tiếp theo của chương trình này.<br>
		Các bạn sinh viên đến từ rất sớm để điểm danh và xếp hàng thành bốn nhóm. Mỗi nhóm sẽ đến tham quan một chi nhánh của PVcomBank.<br>
		<img src="anh/s1.jpg" width="600" height="400"><br>
		<p><small>Mọi người đều rất hào hứng</small></p>
	</p>
	<p align="justify">
		7h45′, chuyến xe đầu tiên lăn bánh đưa những gương mặt háo hức ấy đến các chi nhánh của PVcomBank. Hãy cùng xem một số hình ảnh tại buổi tham quan PVcomBank chi nhánh số 22 Ngô Quyền nhé!<br>
		<img src="anh/s2.jpg" width="600" height="400"><br><br>
		<img src="anh/s3.jpg" width="600" height="400"><br>
		<p><small>Một số hình ảnh bên ngoài và tại sảnh của ngân hàng</small></p>
	</p>
	<p align="justify">
		Mở đầu chương trình, anh Sáng, đại diện Ngân hàng PVcomBank chi nhánh số 22 Ngô Quyền đón thầy trò đoàn tham quan ĐH Hà Nội và giới thiệu sơ qua về các quy mô, nhân sự, cơ cấu tổ chức,… của ngân hàng.<br>
		<img src="anh/s4.jpg" width="600" height="400">
	</p>
	<p align="justify">
		Tiếp theo, sinh viên HANU được chị Huyền, kiểm soát viên, đại diện phòng Dịch vụ khách hàng chia sẻ về công việc của phòng cũng như những thách thức, khó khăn khi làm ngân hàng.<br>
		<img src="anh/s5.jpg" width="600" height="400">
	</p>
	<p align="justify">
		Các bạn sinh viên rất hào hứng trao đổi, đặt câu hỏi và được chị giải đáp rất nhiệt tình.<br>
		<img src="anh/s6.jpg" width="600" height="400">
	</p>
	<p align="justify">
		Điểm đến tiếp theo trong buổi tham quan này là phòng Khách hàng doanh nghiệp. Tại đây, các bạn được nghe chia sẻ thế nào là khách hàng doanh nghiệp và các dịch vụ đối với nhóm khách hàng này.<br>
		<img src="anh/s7.jpg" width="600" height="400"><br>
		<p><small>Các anh chị ở phòng Khách hàng doanh nghiệp đều là những người rất vui vẻ và nhiệt tình</small></p>
	</p>
	<p align="justify">
		Điểm đến tiếp theo cũng là điểm đến cuối cùng và nhận được sự quan tâm nhiều nhất của các bạn sinh viên: Phòng Khách hàng cá nhân.<br>
		Anh Tuấn, đại diện phòng Khách hàng cá nhân giao lưu, chia sẻ với các bạn sinh viên về công việc của phòng, nguyên tắc làm việc cũng như các kĩ năng cần thiết để trở  thành nhân viên ngân hàng và các vị trí thực tập, cộng tác viên mà sinh viên có thể đăng kí làm việc.<br>
		<img src="anh/s8.jpg" width="600" height="400"><br>
		<p><small>Các bạn sinh viên đều đặt câu hỏi rất sôi nổi</small></p>
	</p>
	Kết thúc buổi tham quan, anh Sáng chia sẻ thêm với sinh viên về các nguồn tiếp cận thông tin tuyển dụng cũng như về các vị trí phù hợp với các bạn sinh viên còn ít kinh nghiệm.<br>
	Cuối cùng, mọi người cùng nhau chụp ảnh lưu giữ kỉ niệm về buổi tham quan bổ ích này.<br>
	<img src="anh/s9.jpg" width="500" height="600">
	</p>
	<p align="justify">
		Có thể nói, đây là một buổi tham quan hết sức thú vị và bổ ích, giúp các bạn sinh viên có nhu cầu đầu quân cho ngành tài chính ngân hàng có cái nhìn tổng quan hơn về doanh nghiệp, đồng thời cũng mở ra cho các bạn rất nhiều cơ hội thực chiến. Hi vọng trong tương lai, phòng Công tác sinh viên và Quan hệ doanh nghiệp sẽ có nhiều chương trình tham quan, tìm hiểu hơn để có thể giúp các bạn sinh viên có cơ hội tiếp xúc nhiều hơn với doanh nghiệp!
	</p>
	<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=9");

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
		       			 VALUES ( '$cmt', '9' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=9");
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
								
<body>
</html>