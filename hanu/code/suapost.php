<html>
<body>
<?php
	session_start();
include ("connect.php");
if (isset ($_POST['edit'])){
		$title=$_POST["title"];
		$content=$_POST["content"];
		$img=$_POST["image"];
		$suaid=$_GET['suaid'];
		$sql="UPDATE article
				SET title='$title',
					content='$content',
					image='$img'
				WHERE article_id= $suaid ";
		$suapost=$conn->prepare($sql);
		$suapost->execute();

			
			echo "<b>Chúc mừng bạn đã chỉnh sửa thành công</b>"."<br>";
			echo "<a href='homepage.php'>Quay lại</a>";
		}
	?>
	<form method="post">
		<table width="500" height="400" align="center">
			<tr>
				<td  align="center" colspan="2" ><b>Chỉnh sửa</b></td>
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
					// Kết nối PDO
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
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input one click (return confirm "Bạn có chắc chắn muốn thay đổi") type="submit" name="edit" value="Chỉnh sửa"></td>
		</tr>
 
		</table>
	</form>
</body>
</html>