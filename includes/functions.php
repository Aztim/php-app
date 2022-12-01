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


function showData(){
  global $conn;

  $query = "SELECT * FROM users ORDER BY id ASC";
  $run = mysqli_query($conn, $query);

  while($row = mysqli_fetch_assoc( $run )) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $website = $row['website'];
    $phoneno = $row['phoneno'];

    echo "<tr>";
    echo "<td>{$id}</td>";
    echo "<td>{$name}</td>";
    echo "<td>{$email}</td>";
    echo "<td>{$website}</td>";
    echo "<td>{$phoneno}</td>";
    echo "<td><a href='index.php?edit={$id}' class='btn btn-primary'> Edit</a></td>";
    echo "<td><a href='index.php?delete={$id}' class='btn btn-danger'>Delete</a></td>";

    echo "</tr>";
  }

}

//Edit Button's Click Event

if(isset($_GET['edit'])) {
  $id = $_GET['edit'];

  $query = "SELECT * FROM users WHERE id = $id";
  $run = mysqli_query( $conn, $query );

  while($row = mysqli_fetch_assoc( $run )){
    $name = $row['name'];
    $email = $row['email'];
    $website = $row['website'];
    $phoneno = $row['phoneno'];
  }
}

if(isset($_POST['update'])){

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  $phoneno = $_POST['phoneno'];

  $query = "UPDATE users SET
  name = '{$name}',
  email = '{$email}',
  website = '{$website}',
  phoneno = '{$phoneno}'
  WHERE id = $id";

  $run = mysqli_query($conn, $query);

  if($run == TRUE){
    echo "<div class='alert alert-success' role='alert'>Record Has been updated</div>";
    header('Refresh:5', 'url:index.php');
  } else {
    echo "<div class='alert alert-danger' role='alert'>Something went wrong, Please try again </div>";
    header('Refresh:5', 'url:index.php');
  }
}

?>