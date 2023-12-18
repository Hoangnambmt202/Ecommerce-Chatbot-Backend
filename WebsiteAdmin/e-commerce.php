<!DOCTYPE html>
<html>

<head>
  <title>TRUNG HIẾU - ADMIN</title>
  <link rel="stylesheet" type="text/css" href="./e-commerce.css">
  <link rel="stylesheet" type="text/css" href="./delete.js">


</head>

<body>
  <header>

  </header>

  <div class="main-container">
    <div class="menu">
      <h1>SẢN PHẨM </h1>
      <navbar>
        <ul>
          <li><a href="./statistical.html">Trang chủ</a></li>
          <li><a href="./form.php">Thêm sản phẩm</a></li>
          <li><a href="./insert_category.php">Thêm danh mục</a></li>

        </ul>
      </navbar>
    </div>


    <div class="content">
      <?php
      // Tạo kết nối
      $conn = mysqli_connect("localhost", "root", "", "webbannem");

      // Kiểm tra kết nối
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      // Xử lý thêm sản phẩm vào cơ sở dữ liệu khi form được gửi
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Prt_Name = $_POST["Prt_Name"];
        $Prt_Description = $_POST["Prt_Description"];
        $Prt_Price = $_POST["Prt_Price"];
        $Prt_Img = $_POST["Prt_Img"];
        $Prt_Quantity = $_POST["Prt_Quantity"];
        $Cat_ID = $_POST["cat_id"];

        $query = "INSERT INTO `products` (`Cat_ID`,`Prt_Name`, `Prt_Quantity`,`Prt_Description`, `Prt_Price`, `Prt_Img`) VALUES ('$Cat_ID','$Prt_Name','$Prt_Quantity', '$Prt_Description', '$Prt_Price', '$Prt_Img')";
        // ket noi csdl
        mysqli_query($conn, $query);
      }
      // xuất dữ liệu  

      $sql_product = "SELECT Prt_ID, Prt_Name, Prt_Price, Prt_Img from products";
      $sql_connect_product = mysqli_query($conn, $sql_product);
      if (!$sql_connect_product) {
        echo "Khong the lay du lieu";
      }
      echo "<table border='1'cellspacing='0'cellpadding='26' >
<tr>
<th>Tên</th>
<th>giá  </th>
<th>hình ảnh </th>
<th>sửa </th>
<th>xóa </th>
</tr>";

      while ($sql_array_product = mysqli_fetch_assoc($sql_connect_product)) {
        echo
        "<a href = './detail.php?id=". $sql_array_product['Prt_ID'] . "'class='product-frame'>
            <div class='product-buy-btn'>
              <tr>
                <td><div class='Name-product'>" . $sql_array_product['Prt_Name'] . "</div></td>
                <td><div class='Price-product'>" . $sql_array_product['Prt_Price'] . "</div></td>
                <td><img src='" . $sql_array_product['Prt_Img'] . "' class='img'></td>
                <td><button><a href = './formfix.php?id=" . $sql_array_product['Prt_ID'] . "' class='fix'  > fix </a></button></td>
                <td><button onclick='confirmDelete()'><a href = './delete.php?id=" . $sql_array_product['Prt_ID'] . "' class='deleta' > delete </a></button></td>
              </tr>
            </div>
        </a>";
      }

      echo "</table>";
      if (isset($_GET["id"])) {
        $_id = $_GET["id"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $Prt_Name = $_POST["Prt_Name"];
          $Prt_Description = $_POST["Prt_Description"];
          $Prt_Price = $_POST["Prt_Price"];
          $Prt_Img = $_POST["Prt_Img"];
          $Prt_Quantity = $_POST["Prt_Quantity"];
          $Cat_ID = $_POST["cat_id"];
          $query = "UPDATE products SET Prt_Name='$Prt_Name', Prt_Price='$Prt_Price', Prt_Quantity='$Prt_Quantity', Prt_Description='$Prt_Description', Prt_Img='$Prt_Img', Cat_ID='$Cat_ID' WHERE Prt_ID=$_id";

          if (mysqli_query($conn, $query)) {
            echo "Sửa thông tin sản phẩm thành công!";
          } else {
            echo "Lỗi: " . mysqli_error($conn);
          }
        }

        // Lấy thông tin sản phẩm hiện tại
        $sql_product = "SELECT * FROM products WHERE Prt_ID=$_id";
        $result_product = mysqli_query($conn, $sql_product);

        if (mysqli_num_rows($result_product) > 0) {
          $sql_array_product = mysqli_fetch_assoc($result_product);
        }
      }

      mysqli_close($conn);






























      ?>



    </div>
  </div>


  <!--  -->






</body>

</html>