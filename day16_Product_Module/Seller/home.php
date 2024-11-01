<?php
session_start();
if (!isset($_SESSION["login_status"])) {
    echo "you skipped login....";
    echo "<a href='../shared/login.html'>Login here...</a>";
    die;
}
if ($_SESSION['login_status'] == false) {
    echo 'Unbothered Attempt';
    echo "<br> <a href='../shared/login.html'>Login here...</a ";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Vender home page</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="upload.php" method="post" class="w-75 bg-info p-3" enctype="multipart/form-data">
        <h3 class="text-center text-white mt-2">Upload Products here..</h3>
        <input class="form-control mt-4" type="text" placeholder="Product name" name="name">
        <input class="form-control mt-2" type="number" placeholder="Product price" name="price">
        <textarea class="form-control mt-2" name="details" placeholder="Product description" cols="30" rows="5"></textarea>
        <input class="form-control mt-2" type="file" name="pdtimg" accept=".jpg,.png">

        <div class="mt-3 text-center">
        <button class="btn btn-danger">upload</button>
        </div>
    </form>
    </div>
</body>

</html>