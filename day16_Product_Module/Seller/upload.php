<?php
print_r($_POST);
echo "<br>";
print_r($_FILES);
$source = $_FILES['pdtimg']['tmp_name']; 
$target = "../shared/seller/images/" . $_FILES['pdtimg']['name'];

move_uploaded_file($source, $target);

$conn = new mysqli("localhost", "root", "", "ecom", 3306);
$sql_status = mysqli_query($conn, "INSERT INTO product(name, price, details, imgpath) VALUES('$_POST[name]', '$_POST[price]', '$_POST[details]', '$target')");

if ($sql_status) {
    echo "Product uploaded successfully!";
} else {
    echo "Error in SQL: " . mysqli_error($conn);
}
?>
