<?php

session_start();
$_SESSION['login_status'] = false;


$host = "localhost";
$user = "root";
$pass = "";
$db = "ecom";
$port = 3306;


$conn = new mysqli($host, $user, $pass, $db, $port);

$query = "SELECT * FROM user WHERE username = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $_POST['username'], $_POST['password']);
$stmt->execute();
$sql_result = $stmt->get_result();

if ($sql_result->num_rows > 0) {
    echo "Login Success";

    $_SESSION['login_status'] = true;

    $dbrow = $sql_result->fetch_assoc();
    print_r($dbrow);

    if ($dbrow["usertype"] == "seller") {
        header("Location: /ecom/ACMEGRADE-Minor-Project/Seller/home.php");
    } else if ($dbrow["usertype"] == "buyer") {
        header("Location: /ecom/ACMEGRADE-Minor-Project/Buyer/home.php");
    }
} else {
    echo "<h2>Invalid username/password</h2>";
}
