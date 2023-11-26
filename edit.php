<?php
include 'connent.php';
$id = $_GET['id'];
$sql_edit = "SELECT * FROM cruds Where id = $id";
$result = mysqli_query($con, $sql_edit);
if (mysqli_num_rows($result) > 0) {
  while ($rows = mysqli_fetch_array($result)) {

?>
    <!doctype html>
    <html lang="en">

    <head>
      <title>Cruds</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
      <form method="post">
        <div class="container my-5">
          <input type="hidden" class="form-control" name="edit_id" value="<?php echo $rows[0]; ?>">
          <div class="form-control">
            <label>Name:</label>
            <input type="text" class="form-control" name="Name" value="<?php echo $rows['Name']; ?>">
          </div>

          <div class="form-control">
            <label>Email:</label>
            <input type="Email" class="form-control" name="Email" value="<?php echo $rows['Email']; ?>">
          </div>

          <div class="form-control">
            <label>Age:</label>
            <input type="number" class="form-control" name="Age" value="<?php echo $rows['Age']; ?>">
          </div>

          <div class="form-control">
            <label>Adress:</label>
            <input type="text" class="form-control" name="Adress" value="<?php echo $rows['Adress']; ?>">
          </div>

          <button type="submit" class="btn btn-success" name="update">Update</button>
        </div>
      </form>
  <?php
  }
}
  ?>
  <?php
  if (isset($_POST['uptade'])) {
    $update_id = $_POST['edit_id'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $age = $_POST['Age'];
    $adress = $_POST['Adress'];
    $sql_upd = "UPTADE cruds SET
  Name='$name',Email='$email',Age='$age',Adress='$adress'Where id ='update_id'";
    $reses = mysqli_query($con, $sql_upd);
    if ($reses) {
      echo "Data uptated";
      header("location:veiw.php");
    } else {
      echo "Data Not updated";
      header("location:veiw.php");
    }
  }

  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>