
<?php 

include ("connect.php");
		if(isset($_GET['xoaid'])){
			$xoaId = $_GET['xoaid'];
			$query="DELETE FROM article
			        WHERE article_id=$xoaId ";
			$xoa=$conn->prepare($query);
			$xoa->execute();
			
			echo "Xóa thành công"."<br>";
    echo "<a href=homepage.php>Quay lại</a>";
	}
	
?>