<?php

require_once 'action/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Library WHERE library_id = {$id}";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn = $data['isbn'];
        $type = $data['type'];
        $firstname = $data['author_first_name'];
        $lastname = $data['author_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publisherdate = $data['publisher_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
    } else {
        header("location: error.php");
    }
    mysqli_close($conn);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
    <?php require_once 'components/boot.php' ?>
</head>

<body>
    <?php require_once 'components/navigation.php' ?>
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-12">
                <h3 class="animate__animated animate__slideInLeft">Update</h3>
            </div>
            <div class="col-6">
                <div>
                    <img src='image/<?php echo $image ?>' alt="<?php echo $image ?>">
                </div>
            </div>
        </div>
        <fieldset>
            <form action="action/a_update.php" method="post" enctype="multipart/form-data">
                <table class="table text-dark">
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Product Name" value="<?php echo $title ?>" /></td>
                    </tr>
                    <tr>
                        <th>Isbn</th>
                        <td><input class='form-control' type="number" name="isbn" placeholder="Price" step="any" value="<?php echo $isbn ?>" /></td>
                    </tr>
                    <tr>
                        <th>type</th>
                        <td><input class='form-control' type="text" name="type" placeholder="Type" value="<?php echo $type ?>" /></td>
                    </tr>
                    <tr>
                        <th>author_first_name</th>
                        <td><input class='form-control' type="text" name="author_first_name" placeholder="first" value="<?php echo $firstname ?>" /></td>
                    </tr>
                    <tr>
                        <th>author_last_name</th>
                        <td><input class='form-control' type="text" name="author_last_name" placeholder="last" value="<?php echo $lastname ?>" /></td>
                    </tr>
                    <tr>
                        <th>publisher_name</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publishername ?>" /></td>
                    </tr>
                    <tr>
                        <th>publisher_address</th>
                        <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" value="<?php echo $publisheraddress ?>" /></td>
                    </tr>
                    <tr>
                        <th>publisher_date</th>
                        <td><input class='form-control' type="number" name="publisher_date" placeholder="Publisher Date" value="<?php echo $publisherdate ?>" /></td>
                    </tr>
                    <tr>
                        <th>availability</th>
                        <td><input class='form-control' type="text" name="availability" placeholder="Availability" value="<?php echo $availability ?>" /></td>
                    </tr>
                    <tr>
                        <th>short_description</th>
                        <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" value="<?php echo $shortdescription ?>" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $data['library_id'] ?>" />
                        <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                        <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    <?php require_once 'components/footer.php' ?>
</body>

</html>