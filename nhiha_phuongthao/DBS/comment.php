<?php 

//connect 
	
//if submit button is pressed
	$message = array();
	$message = $message['name'] = $message['mess'] = NULL;
	$name = $mess = NULL;

	if(isset($_POST['submit'])){
//Check for filling comment title 
	if(empty($_POST['name'])){
		$message['name'] = "Please fill in title for your comment";
	}
	else{
		$name = $_POST['name'];
	}
//Check for filling content 
	if(empty($_POST['mess'])){
		$message['mess'] = "Please type your comment here !";
	}
	else{
		$mess = $_POST['mess'];

	}
}
	if($name && $mess){
		$sql = "INSERT INTO comment(name, mess, create_at, id)
				VALUES  $name, $mess, now(), $id";
		mysqli_query($conn,$sql);
	
			echo "Your comment has been posted !"; 
}

?>
<!DOCTYPE html> 
<html>
<body>
	<div>
	<div id = "Comment">
		<fieldset>
		<legend>Comment</legend>
				<form action = "postdetail.php?<?php echo $id ?>" method = "POST">
		<table> 
			<tr>
				<td>Name:</td> 
				<td><input type = "text" name = "name" size = "16" value ="<?php echo $message['name']; ?>"></td>
			</tr>
				<td>Message:</td>
				<td><textarea name = "mess" cols = "30" rows = "5" value =" <?php echo $message['mess'] ?>"></textarea></td>

			<tr>
				<td><input type = "submit" name = "submit" class = "btn btn-submit" value= "Submit"></td>
			</tr>
		</table>
				</form>
		</fieldset>
	</div>
	</div>