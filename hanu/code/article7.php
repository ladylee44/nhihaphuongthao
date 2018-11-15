<?php include("header.php");?>
	
<table width="500" height="400" align="center" >
	<tr>
		<td>

	<h1>Ở Hanu thì ngồi học ở đâu?</h1>
	<?php
		include ("connect.php");
		$articleinfo= $conn->prepare("SELECT article.article_id, article.author_id, article.last_time_updated, author.authorid, author.name, author.workplace
											FROM article
											INNER JOIN author
											ON article.author_id= author.authorid
											WHERE article.article_id=11");

		$articleinfo->execute();
		foreach ($articleinfo as $values){
			echo "<font color='red'>"."$values[4]"."</font>".",Theo "."<a href='https://www.nbcnews.com' target='_blank'>"."$values[5]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."$values[2]"."<br>"."<br>";
		}
		?>
	<i align="justify">Chào xìn các Hanuers mến thương, ở bài báo này tôi sẽ gợi ý cho các bạn một số địa điểm lý tưởng (ngoài classroom) để bạn hiền có thể cảm thấy thoải mái ngồi học.</i><br>
	<p align="justify">
		<h2>Thư viện</h2>
		Vâng địa điểm đầu tiên và cũng có lẽ là lý tưởng nhất đó chính là Thư viện Hanu. Chỉ cần 1 chiếc student card xinh xắn bạn hiền có thể vào đây ngồi lì cả ngày mà không ai đuổi. Thư viện Hanu- hè thì điều hòa 16 độ mát rượi đến từng cọng chân lông, đông thì kín đáo không một luồng gió có thể luồn vào. Hơn thế nơi đây còn đặc biệt yên tĩnh, thích hợp cho cả việc ngủ.Thêm vào đó, bạn hiền có thể vào đây xài wifi full 5 vạch để vừa học vừa nhắn tin cho gấu hoặc lên youtube xem xiếc, xem phim cấp 3... sau mỗi phút giây học tập căng thẳng. Điều cuối cùng nhưng chưa phải kết thúc thư viện Hanu còn có hệ thống phòng máy và rất nhiều sách thuộc về nhiều lĩnh vực để bạn hiền có thể tra cứu, tìm tài liệu.<br><br>
	<img src="anh/t.jpg" width="500" height="600"><br>
	<small>Phía ngoài thư viện</small><br><br>
	<img src="anh/a.jpg" width="500" height="600"><br>
	<small>Cảnh Hanuers đang ngồi học tại thư viện</small>
	</p>
	<h2>Ghế gỗ khu vực White House</h2>
	<p align="justify">
		Hãy thử tưởng tượng xem nếu bạn ngồi học giữa một không gian mở 4 chiều, đủ ánh sáng (đói lúc còn thừa vì nắng quá gắt), quạt trời mát rượi và vừa học bạn vừa có thể ngắm chim, bươm bướm bay lượn tung tăng, những khóm hoa xinh xắn và cả nhưng đám mây đang trôi hờ hững trên bầu trời. Ôi thật thơ mộng, thật trữ tình! <br><br>
		<img src="anh/a9.jpg" width="500" height="400">
	</p>
	<h2>Sân vận động</h2>
	<p align="justify">
		Học xong ùa ra sân cỏ chạy vài vòng giảm street, tăng cường thể lực, tuyệt quá bạn nhỉ!<br>
		<img src="anh/a12.jpg" width="500" height="600"><br>
		<small>Ghế đá mát đít cho bạn hiền ngồi học</small><br><br>
		<img src="anh/a11.jpg" width="500" height="600"><br>	
		<small>Đường chạy cho bạn</small>
	</p>
	<h2>Trà sữa sang chảnh</h2>
	<p align="justify">
		Học ở Hanu lâu, chắc chắn bạn hiền biết rằng quanh Hanu không thiếu gì hàng quán và tôi nghĩ nếu muốn chọn một quán để học thì cafe đèn mờ và trà sữa xì tin sẽ là 2 địa điểm phù hợp cho bạn.
	</p>
		<img src="anh/a8.jpg" width="500" height="600"><br>
		<small>Không thiếu những quán trà sữa luôn sale sập mặt cho những sinh viên mắc bệnh viêm màng túi thâm niên</small><br><br>
		<img src="anh/a6.jpg" width="500" height="600"><br>
		<small>...với những cô model hấp dẫn thế này</small><br><br>
		<?php
		include ("connect.php");
		$key= $conn->prepare("SELECT `keyword`, `article_id`, `tag_link` FROM `keyword` WHERE article_id=11");

		$key->execute();
		foreach ($key as $k){
			echo "<a href='".$k[2]."'>"."#"."$k[0]"."</a>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
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
		       			 VALUES ( '$cmt', '11' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id=11");
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