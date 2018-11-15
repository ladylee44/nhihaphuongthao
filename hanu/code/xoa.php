<?php 
	include("header.php");
	include("connect.php");
		if(isset($_GET['xoaid'])){
			$xoaId = $_GET['xoaid'];
			$query="DELETE FROM user
			        WHERE userid=$xoaId";
			$xoa=$conn->prepare($query);
			$xoa->execute();
			$query1="DELETE FROM userprofile
			         WHERE userid=$xoaId";
			$xoa1=$conn->prepare($query1);
			$xoa1->execute();
    		echo "Xóa thành công"."<br>";
    		echo "<a href=quanlytv.php>Quay lại</a>";
		}
	include("footer.php");
	?>
		