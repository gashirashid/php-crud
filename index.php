<?php
// connection to database
// hostname , username , password, database name
$conn = mysqli_connect('localhost', 'root', '11111111', 'crud');
$sql_query = "SELECT * FROM users";
$sql_result = mysqli_query($conn, $sql_query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">
                <a href="add_user.php" class="btn btn-primary">Add User</a>
                <h1>Registered Users</h1>
                <table class="table table-bordered table-striped table-sm table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        
                        if (mysqli_num_rows($sql_result) > 0) {
                            while ($row = mysqli_fetch_assoc($sql_result)) {

                        ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td><button class="btn btn-info">Edit</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="6">No Data Available</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
