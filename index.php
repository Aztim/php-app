<?php require_once "includes/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">
      <h2 class="text-center headh2">Global Private LTD</h2>
      <table class="table table-hover table-bordered">

        <?php addRecord(); ?>

        <thead>
          <tr class="table-primary">
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Website</td>
            <td>Phone No</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1</td>
            <td>Aztim</td>
            <td>tim201182@gmail.com</td>
            <td>www.aztim.com</td>
            <td>123456789</td>
            <td><a href=""  class="btn btn-primary">Edit</a></td>
            <td><a href=""  class="btn btn-danger">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container">
      <form action="index.php" method="post">
        <div class="form-group">
          <label for="namefield">Name:</label>
          <input type="text" name="name" value="" id="nameField" class="form-control">
        </div></br>

        <div class="form-group">
          <label for="namefield">Email:</label>
          <input type="text" name="email" value="" id="nameField" class="form-control">
        </div></br>

        <div class="form-group">
          <label for="namefield">Website:</label>
          <input type="text" name="website" value="" id="nameField" class="form-control">
        </div></br>

        <div class="form-group">
          <label for="namefield">Phone:</label>
          <input type="number" name="phoneno" value="" id="nameField" class="form-control">
        </div></br>

        <div class="form-group">
          <input type="submit" name="add" value="Add Record" class="btn btn-success">
          <input type="submit" name="update" value="Update Record" class="btn btn-warning">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div></br>

      </form>
    </div>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
    ></script>
  </body>
</html>