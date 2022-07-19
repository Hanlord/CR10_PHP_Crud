<?php
require_once 'action/db_connect.php';
$publ = $_GET["publisher_name"];
$sql = "SELECT * FROM Library WHERE publisher_name = '$publ'";
$result = mysqli_query($conn, $sql);
$tbody = "";
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $tbody .= "
    <div class='card mt-4 mb-4 mx-2' style='width: 18rem;'>
  <img class='card-img-top' src='image/" . $row['image'] . "'>
  <div class='card-body'>
    <h5 class='card-title'>" . $row['title'] . "</h5>
    <p class='card-text'>" . $row['short_description'] . "</p>
  </div>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>ISBN/EAN: " . $row['isbn'] . "</li>
    <li class='list-group-item'>Author: " . $row['author_first_name'] . "
    " . $row['author_last_name'] . "</li>
    <li class='list-group-item'>Available: " . $row['availability'] . "</li>
    <li class='list-group-item'><a href='publisher.php?publisher_name=" . $row['publisher_name'] . "' class='card-link'>Publisher: " . $row['publisher_name'] . "</a></li>
    <li class='list-group-item'>Country: " . $row['publisher_address'] . "</li>
    <li class='list-group-item'>Published: " . $row['publisher_date'] . "</li>
    <div class='col-12'>
    <a href='details.php?library_id=" . $row['library_id'] . "'><button class='button btn-primary' type='button'>Show Details</button></a>
    <a href='update.php?id=" . $row['library_id'] . "'><button class='button btn-warning' type='button'>Edit</button></a>
    <a href='delete.php?id=" . $row['library_id'] . "'><button class='button btn-danger' type='button'>Delete</button></a>
    </div>
    </ul>
    </div>
            ";
  };
} else {
  $tbody = "
       <tr>
         <td>class='text-center'>Not Data </td>
        </tr>
    
    ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once 'components/boot.php' ?>
  <title>Details</title>
</head>

<body>
  <?php require_once 'components/navigation.php' ?>
  <div>
    <div class="row text-center">
      <div class="col-12 row justify-content-center">
        <h1 class="text-center animate__animated animate__zoomIn"><?php echo $publ; ?></h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row rows-col-lg-4 rows-col-md-2 rows-col-sm-1 animate__animated animate__fadeInLeft">
      <?= $tbody ?>
    </div>
  </div>
  <br>
  <?php require_once 'components/footer.php' ?>
</body>

</html>