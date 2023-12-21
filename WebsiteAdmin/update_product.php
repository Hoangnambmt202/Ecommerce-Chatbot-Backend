<div class="heading"><h1>SỬA THÔNG TIN SẢN PHẨM</h1></div>
<div class="product-details">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "webbannem");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_GET["id"])) {
        $productID = $_GET["id"];
        $sql = "SELECT * FROM products WHERE Prt_ID = ".$productID."";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        } else {
            echo "<p>Không tìm thấy sản phẩm.</p>";
        }
    } 

    $conn->close();
    ?>
    <form method="POST" action="update.php">
        <input class="update-prt-input" type="hidden" name="Prt_ID" value="" placeholder="">
       
        <label for="Prt_Name">Tên sản phẩm:</label>
        <input class="update-prt-input" type="text" id="Prt_Name" name="Prt_Name" value="" placeholder="">

        <label for="Prt_Price">Giá sản phẩm:</label>
        <input class="update-prt-input" type="text" id="Prt_Price" name="Prt_Price" value="" placeholder="">

        <label for="Prt_Quantity">Quantity:</label>
        <input class="update-prt-input" type="text" id="Prt_Quantity" name="Prt_Quantity" value="" placeholder="">

        <label for="Prt_Description">Description:</label>
        <input class="update-prt-input" type="text" id="Prt_Description" name="Prt_Description" value="" placeholder="">

        <label for="Prt_Picture">Picture:</label>
        <input class="update-prt-input" type="text" id="Prt_Picture" name="Prt_Picture" value="" placeholder="">

        <label for="Cat_ID">Category:</label>
    <select name="Cat_ID" required>
        <option value="1" <?php if ($row["Cat_ID"] == 1) echo "selected"; ?>>CHĂN</option>
        <option value="2" <?php if ($row["Cat_ID"] == 2) echo "selected"; ?>>GA GIƯỜNG</option>
    </select><br>

        <button class="submit" type="submit">Lưu sửa đổi</button>
    </form>
</div>
    <!-- <?php
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
        header("location: manage.php?page_layout=manageProduct ");
    }

    $conn->close();
    ?> -->
