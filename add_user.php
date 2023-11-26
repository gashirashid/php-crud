<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2">
                <a href="index.php" class="btn btn-info">Users</a>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="test" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone</label>
                        <input type="test" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                    </div>
                    <button type="submit" name="sub" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
$conn = mysqli_connect('localhost', 'root', '11111111', 'crud');
if (isset($_POST['sub'])) {
    $name  =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];

    $sql_insert = "INSERT INTO users (name,email,phone) values ('$name','$email','$phone')";
    $response = mysqli_query($conn, $sql_insert);
    if ($response) {
        header("location:index.php");
    }
}

?>