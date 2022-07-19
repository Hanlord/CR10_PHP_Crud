<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $type = $_POST['type'];
    $firstname = $_POST['author_first_name'];
    $lastname = $_POST['author_last_name'];
    $publishername = $_POST['publisher_name'];
    $publisheraddress = $_POST['publisher_address'];
    $publisherdate = $_POST['publisher_date'];
    $availability = $_POST['availability'];
    $shortdescription = $_POST['short_description'];
    $uploadError = '';
    $image = file_upload($_FILES['image']);

    $sql = "INSERT INTO Library (title, image, isbn, type, author_first_name, author_last_name, publisher_name, publisher_address, publisher_date, availability, short_description ) VALUES ('$title','$image->fileName', $isbn, '$type', '$firstname', '$lastname', '$publishername', '$publisheraddress', $publisherdate, '$availability', '$shortdescription' )";

    if (mysqli_query($conn, $sql) == true) {
        $class = "success";
        $message = " 
        <div class='container text-center justify-content-center'>
            <div class='row text-center justify-content-center'>
                <h3 class='col-12 text-danger'>$title</h3>
            </div>
          <table class='table text-center'><tr>
          <td> $title </td>
          <td> $isbn </td>
          <td> $type </td>
          <td> $firstname </td>
          <td> $lastname </td>
          <td> $publishername </td>
          <td> $publisheraddress </td>
          <td> $publisherdate </td>
          <td> $availability </td>
          <td> $shortdescription </td>
          </tr></table><hr>
        </div>";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
        header("refresh: 5; url= ../index.php");
    } else {
        $class = "danger";
        $message = "Error<br>" . $conn->error;
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
    mysqli_close($conn);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <?php require_once '../components/navigation.php' ?>
    <div class="row text-center justify-content-center">
        <div></div>
        <div class="col-12">
            <h3>create</h3>
        </div>
        <div class="col-6">

        </div>
    </div>
    <div class="container">
        <div class="text-center justify-content-center alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-warning" type='button'>Home</button></a>
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>
</body>

</html>