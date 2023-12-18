<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
$conn = mysqli_connect("localhost", "root", "", "webbannem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET["id"])) {
    $productID = $_GET["id"];

    //Xóa sản phẩm khỏi cơ sở dữ liệu
    $sql_delete = "DELETE FROM products WHERE Prt_ID = $productID";

    if (mysqli_query($conn, $sql_delete)) {
        echo "Xóa sản phẩm thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
} else {
    echo "Không có thông tin sản phẩm để xóa.";
}

mysqli_close($conn);
?>
<a href="./e-commerce.php"><button>quay lại</button></a>




    
</body>
</html>