<?php
	include("header.php");
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<form method="POST">
	<table border="1px" align="center" width="500px">
		<tr>
			<td>Khóa tài khoản</td>
			<td><input type="radio" value="1" name="ban">Khóa
				<input type="radio" value="0" name="ban">Không khóa
			</td>
			
		</tr>
		<tr>
			<td>Quyền người dùng<td>
			<select name="role">
				<option value="0" selected>user</option>
				<option value="1" >admin</option>
			</select>
		</tr>
		<tr>
			<td>Mật khẩu admin</td>
			<td><input type="text" name="adpass"></td>
		<tr>
		<td colspan="2" align="center"><input type="submit" name="submit1" value="Chỉnh sửa"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><a href="quanlytv.php">Quay lại</td>
		</tr>
	</table>
	<br>
	<br>
	<?php
		include("connect.php");
		if(isset($_POST["submit1"])){
			$sql="UPDATE user 
		  		  SET role= ".$_POST['role']." 
		  		  WHERE userid = ".$_GET['suaid']."";
		  	$query=$conn->prepare($sql);
		  	$query->execute();
			if($_POST['role']==1){
					$user="SELECT*FROM user
		      			   WHERE userid = ".$_GET['suaid']." ";
					$qUser=$conn->prepare($user);
					$qUser->execute();
					foreach ($qUser as $q) {
						$admin="INSERT INTO admin(name, password)
			       				VALUES ('".$q["username"]."','".$_POST["adpass"]."' ) ";
			            $qAd=$conn->prepare($admin);
						$qAd->execute();
					}
			}
			if(isset($_POST['ban'])){
	            $khoa="UPDATE user
	             	   SET ban= ".$_POST['ban']."
	             	   WHERE userid= ".$_GET['suaid']."  ";
	            $qKhoa=$conn->prepare($khoa);
	            $qKhoa->execute();
	            
	            
	        }

	            echo "Cập nhật thành công!!!"."<br>";
				echo "<a href=quanlytv.php>Quay về trang quản lý</a>";

		}
		include("footer.php");
	?>

</form>
</body>
</html>