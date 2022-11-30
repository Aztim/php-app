<?php require_once "db.php"; ?>

<?php

 $id = "";
 $name = "";
 $email = "";
 $website = "";
 $phoneno = "";

function addRecord(){
  global $conn;

  if( isset($_POST['add'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $phoneno = $_POST['phoneno'];

    $query = "INSERT INTO users(name, email, website, phoneno) VALUES('$name','$email','$website','$phoneno')";

    $run = mysqli_query($conn, $query);

    if( $run == TRUE ) {
      echo "<div class='alert alert-success role='alert' >Record has been added! Thanks</div>";
      header('Refresh:5', 'url:index.php');
    } else {
      echo "<div class='alert alert-danger role='alert' >Record has not been added! Please try again</div>";
      header('Refresh:5', 'url:index.php');
    }
  }
}


?>