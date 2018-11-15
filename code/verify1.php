<?php
// file to check the typed code

echo '<big>'.$_SESSION['code'].'</big>';
$code = $_SESSION['code'];
$input_code = $_POST['type_code'];
if($code == $input_code){
    $_SESSION['access'] = 1;
    header('location: changepass.php');
}
?>