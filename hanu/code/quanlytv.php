<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<form method="post">
	<?php
	    include("header.php");
		include ("connect.php");
		$query="SELECT*FROM user";
		$quanly=$conn->prepare($query);
		$quanly->execute();

	?>
	
		
	
	   <table border="1px" width="600px" align="center">
	   		<tr>
	   			<td colspan= "4" align= "center">Quản lý các thành viên</td>

			</tr>
			<tr>
			
				<td>Username</td>
				<td>Khóa tài khoản</td>
				<td>Quyền</td>
				<td>Hành động</td>

			</tr>
			<?php
				foreach ($quanly as $v) {
					
				
			?> 
			<tr>
				<td><?php echo $v['username'];?></td>
				<td> 
				<?php
				
					if($v['ban'] == 1){
						echo "Khóa";
					}else{
						echo "Không khóa";
					}
				?>
				</td>
				<td>
				<?php
				
				if($v['role']==1){
					echo "admin";
				}else{
					echo "user";
				}

				?>
				</td>
				<td><a href="xoa.php?xoaid=<?php echo $v['userid']?>" 
					   onclick="return confirm('Bạn có chắc chắn muốn xóa');">Xóa</a>
			    	<a href="sua.php?suaid=<?php echo $v['userid']?>">Sửa</a>
				</td>

			</tr>


			<?php
				}
				
				include("footer.php");
			?>
		</table>
	</form>
</body>
</html>