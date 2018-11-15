<?php
    include("header.php");
?>
<html>
<head>
	<meta charset="UTF-8">

</head>
<body>
	<form method="POST" >

<h2 align = "center">Vui lòng nhập mật khẩu để truy cập vào trang quản lý<h2>
    <p align= "center">Xin chào admin 
    	<?php 
    	
    	echo $_SESSION['username'];
    	?><p>
    	<table align="center" >
    		<tr>
    			<td>Mật khẩu:</td>
    			<td><input type="password" name="pass" placeholder="Mật khẩu"><td>
    		</tr>
    		<tr>
    			<td colspan ="2" align="center"><input type="submit" name="ql_submit" value="Xác nhận"><td>   		
    			</tr>
    	</table>
        <br>
        <br>
    	<?php
    	include("connect.php");
    	if(isset($_POST['ql_submit'])){
    		if(empty($_POST['pass'])){
    			echo "Vui lòng nhập mật khẩu";
    		}else{
    			$sql="SELECT*FROM admin 
    			      WHERE password= '".$_POST['pass']."' ";
    			$query=$conn->prepare($sql);
    			$query->execute();
    			$count=$query->rowCount();
    			if($count > 0){
    				header("location:ql.php");
    			}else{
    				echo "Sai mật khẩu vui lòng nhập lại";
    			}
    		}
    	}
        include("footer.php");
    	?>
    	
</form>
</body>
</html>
