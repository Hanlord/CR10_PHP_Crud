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
    $id = $_POST['id'];


    $uploadError = '';

    $image = file_upload($_FILES['image']);
    if ($image->error === 0) {
        ($_POST["image"] == "default.jpg") ?: unlink("../image/$_POST[image]");
        $sql = "UPDATE Library SET title = '$title', image = '$image->fileName', isbn = $isbn, type = '$type', author_first_name = '$firstname', author_last_name = '$lastname', publisher_name = '$publishername', publisher_address = '$publisheraddress', publisher_date = $publisherdate, availability = '$availability', short_description = '$shortdescription'  WHERE library_id = {$id}";
    } else {
        $sql = "UPDATE Library SET title = '$title', isbn = $isbn, type = '$type', author_first_name = '$firstname', author_last_name = '$lastname', publisher_name = '$publishername', publisher_address = '$publisheraddress', publisher_date = $publisherdate, availability = '$availability', short_description = '$shortdescription' WHERE library_id = {$id}";
    }
    if (mysqli_query($conn, $sql) === TRUE) {
        $class = "success";
        $message = "successfully updated";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error: <br>" . mysqli_connect_error();
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
    <title>Update</title>
    <?php require_once '../components/boot.php' ?>


</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../update.php?id=<?= $id; ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>

</body>

</html>