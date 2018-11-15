<?php require_once("includes/connect.php"); ?>
<?php include "includes/header.php" ?>
<?php
	$sql = "SELECT * from posts 
			WHERE hotnews = 1
			ORDER BY createdate desc limit 5";

?>
			<div class="innertube">
				<table width="100%" border="1">
					<tr>
					<?php
						$i = 0;
						$query = mysqli_query($conn,$sql);
						while ($data = mysqli_fetch_array($query)) {
							//number of posts in each line
							if ($i == 3) {
								echo "</tr>";
								$i = 0;
							}
					?>
						<td >
							<b><?php echo $data["title"]; ?></b>
							<p><?php echo "<img src='".$data['photourl']."' alt='photourl'>"; ?></p>
							<a href="postdetail.php?id=<?php echo $data["id"]; ?>"> Read </a>
						</td>
					
					<?php
							$i++;
						}
					?>
				</table>	
			</div>
		</main>
		
<?php include "includes/sidebar.php" ?>
<?php include "includes/footer.php" ?>