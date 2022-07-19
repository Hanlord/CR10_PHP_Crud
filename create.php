<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Add</title>
</head>

<body>
    <?php require_once 'components/navigation.php' ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center">
            <div class="col">
                <h3 class="text-center text-success">Adding</h3>
                <fieldset>
                    <form action="action/a_create.php" method="post" enctype="multipart/form-data">
                        <table class="table text-dark">
                            <tr>
                                <th>Name</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Product Name" /></td>
                            </tr>
                            <tr>
                                <th>ISBN</th>
                                <td><input class='form-control' type="number" name="isbn" placeholder="Price" step="any" value="0" /></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><input class='form-control' type="text" name="type" placeholder="Type" /></td>
                            </tr>
                            <tr>
                                <th>Author first name</th>
                                <td><input class='form-control' type="text" name="author_first_name" placeholder="first" /></td>
                            </tr>
                            <tr>
                                <th>Author last name</th>
                                <td><input class='form-control' type="text" name="author_last_name" placeholder="last" /></td>
                            </tr>
                            <tr>
                                <th>Publisher name</th>
                                <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" /></td>
                            </tr>
                            <tr>
                                <th>Publisher address</th>
                                <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" /></td>
                            </tr>
                            <tr>
                                <th>Publisher date</th>
                                <td><input class='form-control' type="date" name="publisher_date" placeholder="dd-mm-yyyy" /></td>
                            </tr>
                            <tr>
                                <th>Availability</th>
                                <td><input class='form-control' type="text" name="availability" placeholder="Availability" /></td>
                            </tr>
                            <tr>
                                <th>Short description</th>
                                <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" /></td>
                            </tr>
                            <tr>
                                <th>Picture</th>
                                <td><input class='form-control' type="file" name="image" /></td>
                            </tr>
                            <tr>
                                <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                                <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    <?php require_once 'components/footer.php' ?>
</body>

</html>