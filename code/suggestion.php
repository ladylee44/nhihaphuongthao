<?php
// file to bring suggestions on searchbar using ajax 

require'database.php';
if(isset($_GET['query'])){
$search = $_GET['query'];
$query = "select * from users where fname like '$search%' or email like '$search%' limit 5";
$result = $mysqli->query($query);
if(mysqli_num_rows($result) == 0){
    return;
} else {

  while ($row = mysqli_fetch_assoc($result)){
   
      echo "<li>".$row['email']."</li>";
  
}

}
}
?>