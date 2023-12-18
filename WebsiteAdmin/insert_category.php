<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/grid.css">
  <link rel="stylesheet" type="text/css" href="./delete.js">
  <link rel="stylesheet" type="text/css" href="./assets/manage-category.css">
  <title>Thêm Danh mục sản phẩm</title>
</head>

<body>

  <div class="main-container grid">
    <section class="sidebar-section col l-2">
      <div class="menu">
        <h1 class="menu-heading">THÊM DANH MỤC SẢN PHẨM MỚI</h1>
        <navbar>
          <ul>
            <li><a href="./statistical.html">Trang chủ</a></li>
            <li><a href="./form.php">Thêm sản phẩm</a></li>
            <li><a href="./insert_category.php">Thêm danh mục</a></li>
          </ul>
        </navbar>
      </div>
    </section>


    <div class="content-section col l-10">
      <div class="content ">  
        <form class="form insert-category-form " action="./manage_category.php" method="POST">
          <label class="m-bt-10" for="Cat_Name">Tên danh mục mới: </label>
          <input class="input_insert-cat m-bt-10" type="text" for="Cat_Name" name="Cat_Name" placeholder="Thêm danh mục sản phẩm mới" required>
          <input class="submit_insert-cat m-bt-10" type="submit" value="Thêm danh mục">
        </form>
      </div>
    </div>
  </div>
</body>

</html>