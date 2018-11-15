<?php require_once("includes/connect.php") ?>
<?php include "includes/header.php" ?>
<?php
	//if submit button is pressed
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	$sql = "SELECT * 
			FROM posts 
			WHERE id = $id";
	$query = mysqli_query($conn,$sql);

	
?>


<!DOCTYPE html> 
<html>
			<div class="innertube">
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
			?>
				<h3><?php echo $data['title']; ?></h3></div></br>
				<i> Published on: <?php echo $data['createdate']; ?></i>
				<p><?php echo "<img src='".$data['photourl']."' alt='photourl'>"; ?></p>
				<p><?php echo $data['content']; ?></p>
				<p><a href = "home.php">Rate this post</a></p>
				
			<?php } ?>
			</div>

		<?php include "comment.php" ?>
	<?php include "includes/sidebar.php" ?>
<?php include "includes/footer.php" ?>

