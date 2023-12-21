<div class="heading"><h1>QUẢN LÝ SẢN PHẨM</h1></div>
<?php
      require_once './connect.php';
      // Xử lý thêm sản phẩm vào cơ sở dữ liệu khi form được gửi
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Prt_Name = $_POST["Prt_Name"];
        $Prt_Description = $_POST["Prt_Description"];
        $Prt_Price = $_POST["Prt_Price"];
        $Prt_Img = $_POST["Prt_Img"];
        $Prt_Quantity = $_POST["Prt_Quantity"];
        $Cat_ID = $_POST["Cat_ID"];

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
      echo "
      <div class='top-div grid'>
      <a href='./manage.php?page_layout=insertProduct' class='insert-prt-btn'>Thêm sản phẩm mới </a>
      <input class='search-prt-btn' placeholder='Tìm kiếm'>
      
      </div>
      <table border='1'cellspacing='0'cellpadding='10' >
    <tr>
    <th class='col1'>Tên sản phẩm</th>
    <th class='col2'>Giá sản phẩm </th>
    <th class='col3'>Ảnh sản phẩm </th>
    <th class='col4'></th>
    <th class='col5'></th>
    </tr>
    <tbody>
    ";
    ?>
    <?php
      while ($sql_array_product = mysqli_fetch_assoc($sql_connect_product)) {
    ?>
        <tr>
          <td class="col1"><div class="Name-product"> <?php echo $sql_array_product['Prt_Name']?> </div></td>
          <td class="col2"><div class="Price-product"> <?php echo $sql_array_product['Prt_Price']?></div></td>
          <td class="col3"><img src=" <?php echo $sql_array_product['Prt_Img'] ?>"class="img-product"></td>
          <td class="col4"><a href = "./manage.php?page_layout=fixProduct" class="fix"  > <i class="fa-solid fa-pencil"></i> </a></td>
          <td class="col5"><a onclick="confirmDelete()" href = "./manage.php" class="delete" > delete </a></td>
        </tr>
    <?php
     }
    ?>
      </tbody>
    </table>";
<?php
      if (isset($_GET["id"])) {
        $_id = $_GET["id"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $Prt_Name = $_POST["Prt_Name"];
          $Prt_Description = $_POST["Prt_Description"];
          $Prt_Price = $_POST["Prt_Price"];
          $Prt_Img = $_POST["Prt_Img"];
          $Prt_Quantity = $_POST["Prt_Quantity"];
          $Cat_ID = $_POST["Cat_ID"];
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





