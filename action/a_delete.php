<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $image = $_POST['image'];
    ($image == "default.jpg") ?: unlink("../image/$image");

    $sql = "DELETE FROM Library WHERE library_id = {$id}";
    if (mysqli_query($conn, $sql) === TRUE) {
        $class = "success";
        $message = "deleted!";
    } else {
        $class = "danger";
        $message = "not deleted: <br>" . $conn->error;
    }
    mysqli_close($conn);
    header("refresh: 5; url= ../index.php");
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>deletion</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>
</body>

</html>