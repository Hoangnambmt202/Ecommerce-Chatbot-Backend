

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
<button onclick="javascript:history.go(-1)" >quay lại</button>





    
</body>
</html>