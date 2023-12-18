<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./assets/grid.css">
    <link rel="stylesheet" href="./assets/e-commerce.css">
    <title>Thêm sản phẩm mới</title>
</head>

<body>
    <?php
    require("./connect.php");
    $sql_query_catName = "SELECT * FROM category";
    $sql_connect_catName = mysqli_query($conn, $sql_query_catName);
    if (!$sql_connect_catName) {
        echo "Khong the lay du lieu";
    }


    ?>
    <div class="main-container grid">
        <section class="sidebar-section col l-2">
            <div class="menu">
                <h1 class="menu-heading">THÊM SẢN PHẨM MỚI</h1>
                <navbar>
                    <ul>
                        <li><a href="./statistical.html">Trang chủ</a></li>
                        <li><a href="./form.php">Thêm sản phẩm</a></li>
                        <li><a href="./insert_category.php">Thêm danh mục</a></li>
                    </ul>
                </navbar>
            </div>
        </section>

        <section class="content-section col l-10">
            <div class="content">
                <form class="form " action="e-commerce.php" method="POST">
                    <label for="Prt_Name">Tên sản phẩm :</label>
                    <input type="text" name="Prt_Name" placeholder="Thêm tên sản phẩm mới" required>
                    <label for="Prt_Price">Giá sản phẩm :</label>
                    <input type="text" name="Prt_Price" placeholder="Thêm giá sản phẩm mới" required>
                    <label for="Prt_Description">Mô tả sản phẩm :</label>
                    <input type="text" name="Prt_Description" placeholder="Thêm mô tả cho sản phẩm mới" required>
                    <label for="Prt_Img">Ảnh sản phẩm : </label>
                    <input type="text" name="Prt_Img" placeholder="Thêm link hình ảnh sản phẩm mới" required>
                    <label for="Prt_Quantity">Số lượng sản phẩm :</label>
                    <input type="text" name="Prt_Quantity" placeholder="Thêm số lượng sản phẩm mới" required>
                    <label for="Cat_Name">Thuộc danh mục :</label>
                    <select name="Cat_Name" required>
                        //<?php
                        while ($sql_arr_catName = mysqli_fetch_assoc($sql_connect_catName)) {
                            echo "<option value='$sql_arr_catName[Cat_ID]'> $sql_arr_catName[Cat_Name] </option>";
                        }
                        ?>
                    </select>
                    <input type="submit" name="submit" value="Thêm sản phẩm">
                </form>
            </div>
        </section>
        
       
<?php

if(isset($_POST['submit'])){
$selected_value = $_POST['Cat_Name'];
echo "Bạn đã chọn :" .$selected_value;  
}

?>
</div>
</body>

</html>