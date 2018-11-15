<?php require_once("includes/connect.php"); ?>
<?php include "includes/header.php" ?>
<?php
	$sql = "SELECT * from posts 
			WHERE albumid = 3
			ORDER BY createdate desc limit 10";

?>
<h2><legend>Photo Album of Jordan </legend></h2>
			<div class="innertube">
				<table width="100%" border="0">
					<tr>
					<?php
						$i = 0;
						$query = mysqli_query($conn,$sql);
						while ($data = mysqli_fetch_array($query)) {
							//number of photos in each line
							if ($i == 3) {
								echo "</tr>";
								$i = 0;
							}
					?>
						<td >
							
							<p><?php echo "<img src='".$data['photourl']."' alt='photourl'>"; ?></p>
							<a href="postdetail.php?id=<?php echo $data["id"]; ?>">Read News </a>
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