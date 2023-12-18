<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/grid.css">
  <link rel="stylesheet" href="./assets/manage-category.css">
  <title>Quản lý danh mục</title>
</head>

<body>
  <div class="main-container grid">
    <section class="sidebar-section col l-2">
      <div class="menu">
        <h1 class="menu-heading">QUẢN LÝ DANH MỤC SẢN PHẨM</h1>
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
      <?php
      // Tạo kết nối
      $conn = mysqli_connect("localhost", "root", "", "webbannem");

      // Kiểm tra kết nối
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Cat_Name = $_POST["Cat_Name"];


        $query = "INSERT INTO `category` (`Cat_Name`) VALUES ('$Cat_Name')";
        // ket noi csdl
        mysqli_query($conn, $query);
      }
      $sql_category = "SELECT Cat_Name from category";
      $sql_connect_category = mysqli_query($conn, $sql_category);
      if (!$sql_connect_category) {
        echo "Khong the lay du lieu";
      } else {
        while ($sql_array_category = mysqli_fetch_assoc($sql_connect_category)) {
          echo " <div class=''>  $sql_array_category[Cat_Name] </div> ";
        }
      }
      ?>
      </div>
    </section>


  </div>
</body>

</html>