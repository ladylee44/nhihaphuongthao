<?php
	session_start(); 
	include "includes/header.php";
	
 ?>
<?php require_once("includes/connect.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		
		$title = $_POST["title"];
		$content = $_POST["content"];
		$idType = $_POST["idType"];
		$photourl = $_POST["photourl"];
		$public = $_POST['public'];
		$albumid = $_POST['albumid'];
		$sql = "INSERT INTO posts(title, content, createdate, updatedate, photourl, idType, public, albumid ) 
				VALUES ( '$title', '$content', now(), now(), '$photourl', '$idType',$public, $albumid)";
		
		mysqli_query($conn,$sql);
		echo "Posted";
	}
 
?>
<form action="addnewpost.php" method="POST">
		<table>
			<tr>
				<td colspan="2"><h3>Add new post</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Title:</td>
				<td><input type="text" id="title" name="title"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Content :</td>
				<td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Type :</td>
				<td><input type="text" id="idType" name="idType"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Photos :</td>
				<td><input type="file" id="photourl" name="photourl"></td>
			</tr>

			<tr>
				<td nowrap="nowrap">Album ID:</td>
				<td><textarea name="albumid" id="albumid" rows="3" cols="15"></textarea></td>
			</tr>

			<tr>
				<td nowrap="nowrap">Public :</td>
				<td><textarea name="public" id="public" rows="3" cols="15"></textarea></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Add new post"></td>
			</tr>

			<tr>
				<td><a href = "index.php">Home</a></td>
			</tr>
 
		</table>
		
	</form>
<?php include "includes/footer.php" ?>