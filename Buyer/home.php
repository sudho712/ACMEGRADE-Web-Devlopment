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
    <title>Byer home page</title>
</head>
<body>
    <h1>Buyer home page</h1>
</body>
</html>