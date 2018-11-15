<?php
	include("header.php");
?>
<html>
<body>
<form method="POST">
	<table align="center">
		<tr>
			<td>Chỉnh sửa mật khẩu:</td>
		
			<td><input type="password" name="repass"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit"></td>
		</tr>
		<tr>
			<td><a href="ql.php">Quay lại</td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
	include("connect.php");
	
	if(isset($_POST['submit'])){ 
	$sql="UPDATE admin
	      SET password = '".$_POST['repass']."'
	      WHERE name= '".$_SESSION['username']."' ";
	$query=$conn->prepare($sql);
	$query->execute();
	echo "Cập nhật thành công";
}
include("footer.php");
?>