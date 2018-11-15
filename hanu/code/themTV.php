
<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
<?php
	include ("connect.php");
	if (isset($_POST["addsubmit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		
		
		
		$gender= $_POST["gender"];
		
		
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == ""  || $gender =="" ) {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}
		else{ 
			$a="SELECT*FROM user
			    WHERE username= '".$_POST['username']."'";
			$b=$conn->prepare($a);
			$b->execute();
			$count=$b->rowCount();
			if($count>0){
				echo "Tên người dùng này đã tồn tại xin vui lòng nhập lại";
			}else{
				$sql = "INSERT INTO  userprofile ( gender) 
			        VALUES ('$gender')";
			$addUser=$conn->prepare($sql);
			$addUser->execute();
			//Lưu trữ lastID
			$last_id = $conn->lastInsertId();
			
			$sql1= "INSERT INTO user (userid, username, password)
			       VALUES ('$last_id', '$username', '$password' )";
			$addUser1=$conn->prepare($sql1);
			//$addUser1->execute();
			$count=$addUser1->rowCount();
			$addUser1->execute();


			
				

			

			


			echo "<b>Chúc mừng bạn đã thêm thành viên thành công</b>"."<br>";
		}
		}
	}
 
?>
</body>

</html>

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
				<td colspan="2">Form đăng kí</td>
		</tr>	
		<tr>
				<td>Tên người dùng :</td>
				<td><input type="text" id="username" name="username"></td>
		</tr>
		<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" id="pass" name="pass"></td>
		</tr>
		
		
		<tr>
				<td>Giới tính:</td>
				<td><input type="radio" name="gender" value = "Nam">Nam 
					<input type ="radio" name = "gender" value="Nữ">Nữ</td>
		</tr>
		

		
		
		<tr>
				<td colspan="2" align="center"><input type="submit" name="addsubmit" value="Đăng Kí"></td>
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

