<?php
// registeration page where user selects pics

session_start();
require'database.php';

if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
$password = $_SESSION['password']; 
$firstname = $_SESSION['firstname'] ;
$lastname = $_SESSION['lastname'];
$b_day = $_SESSION['b_day'] ;
$b_month = $_SESSION['b_month'] ;
$b_year = $_SESSION['b_year'];
$gender = $_SESSION['gender'] ;
$image_path = 'images/'.$_FILES['image']['name'];
$cover_path = 'cover/'.$_FILES['cover']['name'];
$image = str_replace(" ","+",$image_path);
$cover = str_replace(" ","+",$cover_path);
if (preg_match("!image!",$_FILES['image']['type']) && preg_match("!image!",$_FILES['cover']['type'])) {
			   
			   if (copy($_FILES['image']['tmp_name'], $image) && copy($_FILES['cover']['tmp_name'], $cover)){
				   
   $sql = "INSERT INTO users (`fname`, `lname`, `email`, `password`, `b_day`, `b_month`, `b_year`, `gender`, `image`, `cover`) VALUES ('$firstname','$lastname','$email','$password','$b_day','$b_month','$b_year','$gender','$image','$cover')";
				   
				    if ($mysqli->query($sql) === true){
                                      $_SESSION['image'] = $image;
                                      $_SESSION['cover'] = $cover;
				      $_SESSION['logged_in'] = 1;
                    header("location: profile.php");
					} else {
						  echo 'An error occurred. Please try again later';
					}
             } else {
	                    echo 'File upload failed!';
             }
      } else {
	          echo 'Please only upload GIF, JPG or PNG images!';
      }
} 
if(isset($_POST['skip'])){
    $email = $_SESSION['email'];
$password = $_SESSION['password']; 
$firstname = $_SESSION['firstname'] ;
$lastname = $_SESSION['lastname'];
$b_day = $_SESSION['b_day'] ;
$b_month = $_SESSION['b_month'] ;
$b_year = $_SESSION['b_year'];
$gender = $_SESSION['gender'] ;
$sql = "INSERT INTO users (`fname`, `lname`, `email`, `password`, `b_day`, `b_month`, `b_year`, `gender`) VALUES ('$firstname','$lastname','$email','$password','$b_day','$b_month','$b_year','$gender')";
				   
				    if ($mysqli->query($sql) === true){
                                      
			      $_SESSION['logged_in'] = 1;
           header("location: profile.php");
			} else {
				  echo 'An error occurred. Please try again later';
		}
}
?>
<html>
<head>
   <title>Select a Picture</title> 
   <script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet/component.css" />
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <!--<input type="file" name="image" accept="image/*" />-->
        <!--<input type="file" name="cover" accept="image/*" />-->
        <div class="box">
					<input type="file" style="display: none;" name="image" accept="image/*" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
					<label for="file-1"><span>Choose a Profile Photo</span></label>
				</div>
		<div class="box">
					<input type="file" style="display: none;" name="cover" accept="image/*" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
					<label for="file-2"><span>Choose a Cover Photo</span></label>
		</div>
        <input type="submit" name="submit" value="Save" />
        <input type="submit" name="skip" value="Skip">
    </form>
    <script src="javascript/input-file-name.js"></script>
</body>
</html>