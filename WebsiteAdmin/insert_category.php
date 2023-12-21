<?php
      require './connect.php  ';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Cat_Name = $_POST["Cat_Name"];
        $sql = "INSERT INTO `category` (`Cat_Name`) VALUES ('$Cat_Name')";
        mysqli_query($conn, $sql);
        header('location: manage.php?page_layout=manageCategory');
      }
?>
<div class="heading"><h1>THÊM DANH MỤC MỚI</h1></div>
<form  name="form-category" class="form insert-category-form " method="POST">
  <label class="m-bt-10" for="Cat_Name">Tên danh mục mới: </label>
  <input class="input_insert-cat m-bt-10" type="text" for="Cat_Name" name="Cat_Name" placeholder="Thêm danh mục sản phẩm mới" required>
  <input class="submit m-bt-10"  type="submit" value="Thêm danh mục">
</form>