<html>
<head>
	<meta charset="UTF-8">

</head>
<body  BGCOLOR="AliceBlue">
<header>
	
		<table border="3px" cellpadding="15px" cellspacing="5px" width="100%">
			<td align= "center">
				<a href = "homepage.php"><img src="anh/brand.png" alt = "Dispatch HANU" width="300" height="100" /></a>
			</td>
			<td align = "center">
				<?php
					echo "Chủ Đề";
					include("cat.php");
				?>
			</td>
			<td align ="center">
				<form action = "search.php" method="POST">

					<input type= "text" name = "search" placeholder = "tìm kiếm" />
					<input type= "submit" name="submit" value= "Tìm Kiếm" />
				</form>
			</td>
			<td>
			<?php
			session_start();

			if(isset($_SESSION["username"])){

			echo "<a href = profile.php>".$_SESSION["username"]." </a>";
		}else{
			echo "<a href= logindbs.php>Đăng nhập</a>";
		}

			?>
		</td>
		<?php
		include("connect.php");
		if(isset($_SESSION['username'])){ 
		
		$sql="SELECT* FROM user
		      WHERE username= '".$_SESSION['username']."'  ";
		      
		$query=$conn->prepare($sql);
		$query->execute();
		foreach ($query as $v) { 
			if ($v['role']==1){
				echo "<td><a href=admin.php>Trang quản lý</a></td>";
			}
		}
	}
		?>
		</table> 
	
</header><br>
</body>
</html>