
		<form action="catcon.php" method="POST">
		<select name="categoryid">
		<?php
			    include("connect.php");
				$categoryList= $conn->prepare("SELECT category_id, name FROM category");
				$categoryList->execute();
				echo "Chủ đề";
				foreach ($categoryList as $v){
					echo "<option value='$v[0]'>$v[1]</option>";
				}
			
			
		?>
	</select>
		<input type="submit" name="submit" value="Xem luôn">
	</form>
			
