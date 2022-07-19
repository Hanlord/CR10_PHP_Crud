<?php
require_once 'action/db_connect.php';
$sql = "SELECT * FROM Library";
$result = mysqli_query($conn, $sql);
$tbody = '';
if (mysqli_num_rows($result)  > 0) {
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tbody .= "
      <div class='container col-lg-4 rows-col-md-2 rows-col-sm-1 nsl d-flex justify-content-center animate__animated animate__fadeInLeft'>
        <div class='card' style='width: 18rem;'>
  <img src='image/" . $row['image'] . "' class='card-img-top' alt='...'>
  <div class='card-body bg-dark'>
    <h5 class='card-title'>" . $row['title'] . "</h5>
    <a href='details.php?library_id=" . $row['library_id'] . "'><button class='button btn-primary' type='button'>Show Details</button></a>
    <a href='update.php?id=" . $row['library_id'] . "'><button class='button btn-warning' type='button'>Edit</button></a>
    <a href='delete.php?id=" . $row['library_id'] . "'><button class='button btn-danger' type='button'>Delete</button></a>
  </div>
</div>
      </div>

      ";
  };
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once 'components/boot.php' ?>
  <style>
    .hero {
      width: 100%;
      height: 20rem;
      background-image: url("image/hero.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }
  </style>
  <title>CR#10</title>
</head>

<body>
  <?php require_once 'components/navigation.php' ?>
  <div class="hero text-center align-items-center">
    <h1 class="hero-text text-center animate__animated animate__zoomIn">World Library</h1>
  </div>
  <div>
    <div class="row text-center">
      <div class="col-12">
        <h3 class="heading animate__animated animate__pulse">Our Selection</h3>
      </div>
      <div>
        <a href="create.php"><button class='button btn-success' type="button">Add product</button></a>
      </div>
      <div class="container">
        <br>
        <div class="row rows-col-lg-4 rows-col-md-2 rows-col-sm-1 animate__animated animate__fadeInLeft">
          <?= $tbody ?>
        </div>
      </div>
    </div>
    <?php require_once 'components/footer.php' ?>
</body>

</html>