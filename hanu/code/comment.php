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
