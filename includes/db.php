<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if($conn) {
  echo "We are connected";
}else{
  echo "Connection Failed" . mysqli_error($conn);
}
?>