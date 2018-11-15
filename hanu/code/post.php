
<?php
	include("header.php");
	include("connect.php");

	
	if (isset($_POST["postsubmit"])) {
		$user="SELECT*FROM user
		       WHERE username='".$_SESSION["username"]."'";
		$qUser=$conn->prepare($user);
		$qUser->execute();
		foreach ($qUser as $k) {
			
		
		$title = $_POST["title"];
		$content = $_POST["content"];
		$category = $_POST ["categoryid"];
		$dateLastUpdated = date('Y-m-d');
 		$image= $_POST["sub"];
 		$author_id = $k["userid"];
		$sql = "INSERT INTO article (title, content,category_id, last_time_updated, image,author_id) 
		        VALUES ( '$title', '$content', '$category', '$dateLastUpdated','$image','$author_id')";
		// thực thi câu $sql với biến conn lấy từ file connect.php
		$query=$conn->prepare($sql);
		$query->execute();
		echo "Bài viết đã thêm thành công";

	}
}
 
?>
<html>
<body>
 
	<form action="post.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h3>Thêm bài viết mới</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Tiêu đề bài viết :</td>
				<td><input type="text" id="title" name="title"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Nội dung :</td>
				<td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
			</tr>

			<tr>
				<td nowrap="nowrap">Danh mục</td>
				<td>
					<select id="categoryid" name="categoryid">
					<?php 

					$categoryList= $conn->prepare("SELECT category_id, name FROM category");
					$categoryList->execute();
						echo "Chủ đề";
						foreach ($categoryList as $v){
							echo "<option value='$v[0]'>$v[1]</option>";
						}
						?> 
						</select>
				</td>
			</tr>

			<tr>
				<td><p>Thêm ảnh</p></td>
				<td><input type="file" name="sub"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="postsubmit" value="Thêm bài viết"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="homepage.php">Quay về trang chủ</a></td>
			</tr>
 
		</table>
		
	</form>
	<?php include("footer.php");?>
</body>
</html>