
     
<div class="heading">
  <h1>QUẢN LÝ DANH MỤC</h1>
</div>
<div class='top-div grid'>
  <a href='./manage.php?page_layout=insertCategory' class='insert-prt-btn'>Thêm danh mục mới </a>
  <input class='search-prt-btn' placeholder='Tìm kiếm'>
</div>

<?php
$sql_category = "SELECT * from category ORDER BY Cat_ID ASC";
$sql_connect_category = mysqli_query($conn, $sql_category);
if (!$sql_connect_category) {
  echo "Khong the lay du lieu";
}
?>
<table border='1' cellspacing='0' cellpadding='10'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Tên danh mục</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($sql_array_category = mysqli_fetch_array($sql_connect_category)) {
    ?>
      <tr>
        <td>
          <div class="categoryID"> <?php echo $sql_array_category['Cat_ID']?></div>
        </td>
        <td>
          <div class="categoryName"> <?php echo $sql_array_category['Cat_Name']?></div>
        </td>
        <td><a href='./manage.php?page_layout=fixCategory&id_Cat=<?php echo $sql_array_category['Cat_ID'] ?>' class='fix'> <i class='fa-solid fa-pencil'></i> </a></td>
        <td><a href=' ' class='delete'><i class="fa-solid fa-trash"></i> </a></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>