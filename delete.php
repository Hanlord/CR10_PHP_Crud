<?php
require_once 'action/db_connect.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Library WHERE library_id = {$id}";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $isbn = $data['isbn'];
        $type = $data['type'];
        $firstname = $data['author_first_name'];
        $lastname = $data['author_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publisherdate = $data['publisher_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
        $image = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($conn);
} else {
    header("location: error.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <?php require_once 'components/boot.php' ?>
</head>

<body>
    <?php require_once 'components/navigation.php';
    require_once 'components/boot.php'
    ?>

    <fieldset>
        <div class="row text-center justify-content-center">
            <div class="col-12 animate__animated animate__rollIn">
                <h3>Delete</h3>
            </div>
            <img class='w-25' src='image/<?php echo $image ?>'>
        </div>
        <h4 class="text-danger text-center"><?php echo $title ?></h4>
        <div class="col-12 text-center">
            <form action="action/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="image" value="<?php echo $image ?>" />
                <button class="button btn-danger" type="submit">Yes</button>
                <a href="index.php"><button class="button btn-warning" type="button">No</button></a>
            </form>
        </div>
        </div>
    </fieldset>
    <br>
    <?php require_once 'components/footer.php' ?>
</body>

</html>