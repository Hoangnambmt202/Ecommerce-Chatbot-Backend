<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./e-commerce.css">
<head>
    <title>Sửa Sản Phẩm</title>
</head>
<body>

<div class="main-container">
<div class="menu">
<h2>Sửa sản phẩm</h2>
<navbar>
  <ul>
    <li><a href="./statistical.html">Trang chủ</a></li>
    <li><a href="./form.php">Thêm sản phẩm</a></li>
    
    <li><a href="./e-commerce.php">Sản phẩm </a></li>
    
  </ul>
</navbar>
</div>

 
<div class="content">

<div class="product-details">
    <?php
   

   

    $conn = mysqli_connect("localhost", "root", "", "trangthuongmai");

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
        <input type="hidden" name="Prt_ID" value="<?php echo $row["Prt_ID"]; ?>">
       
        <label for="Prt_Name">Tên sản phẩm:</label>
        <input type="text" id="Prt_Name" name="Prt_Name" value="<?php echo $row["Prt_Name"]; ?>"><br>

        <label for="Prt_Price">Giá sản phẩm:</label>
        <input type="text" id="Prt_Price" name="Prt_Price" value="<?php echo $row["Prt_Price"]; ?>"><br>

        <label for="Prt_Quantity">Quantity:</label>
        <input type="text" id="Prt_Quantity" name="Prt_Quantity" value="<?php echo $row["Prt_Quantity"]; ?>"><br>

        <label for="Prt_Description">Description:</label>
        <input type="text" id="Prt_Description" name="Prt_Description" value="<?php echo $row["Prt_Description"]; ?>"><br>

        <label for="Prt_Picture">Picture:</label>
        <input type="text" id="Prt_Picture" name="Prt_Picture" value="<?php echo $row["Prt_Picture"]; ?>"><br>

        <label for="Cat_ID">Category:</label>
    <select name="Cat_ID" required>
        <option value="1" <?php if ($row["Cat_ID"] == 1) echo "selected"; ?>>CHĂN</option>
        <option value="2" <?php if ($row["Cat_ID"] == 2) echo "selected"; ?>>GA GIƯỜNG</option>
    </select><br>

        <button type="submit">Lưu sửa đổi</button>
    </form>

    
</div>
</div>
</body>

</html>