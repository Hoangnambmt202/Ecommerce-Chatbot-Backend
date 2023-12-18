<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang update sản phẩm</title>
</head>
<body>
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "webbannem");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Prt_ID"])) {
        $productID = $_POST["Prt_ID"];
        $productName = $_POST["Prt_Name"];
        $productPrice = $_POST["Prt_Price"];
        $productQuantity = $_POST["Prt_Quantity"];
        $productDescription = $_POST["Prt_Description"];
        $productPicture = $_POST["Prt_Picture"];
        $categoryID = $_POST["Cat_ID"];

        // Cập nhật thông tin sản phẩm trong cơ sở dữ liệu
        $sql = "UPDATE products SET Prt_Name = '$productName', Prt_Price = '$productPrice', Prt_Quantity = '$productQuantity', Prt_Description = '$productDescription', Prt_Picture = '$productPicture', Cat_ID = '$categoryID' WHERE Prt_ID = $productID";

        if ($conn->query($sql) === TRUE) {
            echo "Sửa sản phẩm thành công.";
        } else {
            echo "Lỗi: " . $conn->error;
        }
        header("location: e-commerce.php ");
    }

    $conn->close();
    ?>
</body>
</html>