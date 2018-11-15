<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
	session_start();
	include ("connect.php");
	if (isset($_POST["edit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$dob = $_POST["dob"];
		$job= $_POST["job"];
		$address = $_POST["address"];
		$gender= $_POST["gender"];
		$phone= $_POST["phone"];
		$avatar = $_POST["avatar"];
		
		
		$sql = "UPDATE userprofile
		        INNER JOIN user
		        ON user.userid=userprofile.userid
			    SET userprofile.name='$name',
			        userprofile.dob='$dob', 
			        userprofile.job='$job', 
			        userprofile.address='$address', 
			        userprofile.gender='$gender',
			        userprofile.phone='$phone',
			        userprofile.avatar='$avatar',
			        user.password='$password'

			        
			    WHERE user.username= '".$_SESSION['username']."' "; 

		
		$addUser=$conn->prepare($sql);
		$addUser->execute();
			
			echo "<b>Chúc mừng bạn đã chỉnh sửa thành công</b>"."<br>";
		}
		?>



<?php 
	include ("header.php"); 
	echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
?>

<html>
<head>
	<meta charset="UTF-8">

</head>

<body>
	<form  method= "POST">
	<table align = "center">
		<tr>
				<td align="center" colspan="2"><b>Chỉnh sửa</b></td>
		</tr>
		<tr>
				<td>Tên hiển thị :</td>
				<td><input type="text" id="name" name="name"></td>
		</tr>	
		
		<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" id="pass" name="pass"></td>
		</tr>
		
		<tr>
				<td>Ngày tháng năm sinh:</td>
				<td><input type="date" id="dob" name="dob"></td>
		</tr>
		<tr>
				<td>Giới tính:</td>
				<td><input type="radio" id="gender"name="gender" value = "Nam">Nam 
					<input type ="radio" id="gender" name ="gender" value="Nữ">Nữ</td>
		</tr>
		

		<tr>
				<td>Nghề nghiệp:</td>
				<td><input type="text" id="job" name="job"></td>
		</tr>
		<tr>
				<td>Địa chỉ :</td>
				<td><input type="text" id="address" name="address"></td>
		</tr>

		<tr>
				<td>Số điện thoại:</td>
				<td><input type="text" id="phone" name ="phone"></td>
		</tr>
		<tr>
				<td>Ảnh đại diện:</td>
				<td><input type="file" id="avatar" name ="avatar"></td>
		</tr>
		
		<tr>
				<td colspan="2" align="center"><input onclick="return confirm('Bạn có chắc chắn muốn thay đổi');" type="submit" name="edit" value="Chỉnh sửa"></td>
		</tr>
 
		</table>
		
	</form>

</body>

</html>
<?php
		echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
	include ("footer.php");
?>

