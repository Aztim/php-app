<?php require_once "functions.php";?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if(!$conn) {
  echo "Connection Failed" . mysqli_error($conn);
}else{
  echo "";
}
?>