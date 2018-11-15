<html>
<body>
	<form  method="post" >
		<table>

			<tr>
				<td align ="center"><h3>Bình luận</3></td>
	<?php
		if(!isset($_SESSION['username'])){ 
	?>
				<td><a href ="logindbs.php">Đăng nhập</a> | <a href="singup.php">Đăng kí</a></td>
				<?php
				} 
				?>
				
			</tr>
			<tr>
				<td nowrap="nowrap"><img src="anh/ava.png" height="100" width="100"></td>
				<td><textarea name="content" rows="5" cols="100" placeholder="Bạn muốn nói gì?"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="sub" value="Gửi bình luận"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
if ( isset ($_POST["sub"])) {
		$user="SELECT*FROM user
		       WHERE username= '".$_SESSION["username"]."'  ";
		$qUser=$conn->prepare($user);
		$qUser->execute();
		//$article="SELECT *  FROM article
		//		  WHERE article_id=1";
		//$qArticle=$conn->prepare($article);
		//$qArticle->execute();
		foreach ($qUser as $k) {
			
		
		$cmt = $_POST["content"];
 		$user_id = $k["username"];
 		
		$sql = "INSERT INTO comment (mess, name, username) 
		        VALUES ( '$cmt', '$name' , '$user_id')";
		// thực thi câu $sql với biến conn lấy từ file connect.php
		$query=$conn->prepare($sql);
		$query->execute();
		echo "Bình luận thành công";
	}
}
?>