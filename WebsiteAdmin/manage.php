<?php

session_start();
include_once './connect.php';
if($_SESSION["email"] == "admin1234@gmail.com" && $_SESSION["password"] == "1234") {

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/grid.css">
  <link rel="stylesheet" href="./assets/manage.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  
  <title>TRUNG HIẾU - ADMIN</title>
</head>

<body>
  <header class="header grid ">
    <div class="header-left">
      <a href="./manage.php">TRUNG HIẾU</a>
    </div>
    <div class="header-right">
      <div class="header-right__item"><a href=""><i class="bell-icon fa-solid fa-bell"></i></a></div>
      <div class="header-right__item"><a href=""><i class="fa-solid fa-envelope"></i></a></div>
      <div class="header-right__item"><a href=""><i class=" fa-solid fa-gear"></i></a></div>
      <div class="header-right__item">
        <button onclick="openSubAccount()" class="Account" >Xin chào, 
          <?php 
          if(isset($_SESSION['email'])) {
            echo "$_SESSION[email]";
          }
          ?>
          <i class="fa-solid fa-caret-down"></i>
          <div class="subnav-account">
            <ul class="subnav-account-list">
              <li class="subnav-account-item"><a href="">Thông tin thành viên</a></li>
              <li class="subnav-account-item"><a href="./logOut.php">Đăng xuất</a></li>
            </ul>
          </div>
        </button>
      </div>
    </div>
     
    
  </header>
  <div class="main-container grid">
    <section class="sidebar-section col l-2">
      <div class="menu">
        <h1 class="menu-heading">BẢNG THỐNG KÊ</h1>
        <navbar class="menu-navbar">
          <ul class="menu-navbar-list">
            <li class="menu-navbar-item"><a href="./manage.php">Trang chủ</a></li>
            <li class="menu-navbar-item"><a href="./manage.php?page_layout=manageProduct">Quản lý sản phẩm</a></li>
            <li class="menu-navbar-item"><a href="./manage.php?page_layout=manageCategory">Quản lý danh mục</a></li>
            <li class="menu-navbar-item"><a href="./manage.php?page_layout=manageComment">Quản lý bình luận</a></li>
          </ul>
        </navbar>
      </div>
    </section>

    <section class="content-section col l-10">
      <div class="content">
      <?php
      if(isset($_GET["page_layout"])){
        switch ($_GET["page_layout"]) {
          case 'manageProduct': include_once './manage_product.php';
            break;
            case 'manageCategory': include_once './manage_category.php';
            break;
            case 'manageProduct': include_once './manage_product.php';
            break;
            case 'insertProduct': include_once './form.php';
            break;
            case 'insertCategory': include_once './insert_category.php';
            break;
            case 'fixProduct' : include_once './update_product.php';
            break;
            case 'fixCategory' : include_once './update_category.php';
            break;

        }
      }
      else {
        include_once './intro.php';
      }
      ?>
       
      </div>
    </section>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="round.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>
<?php
}
else {
  header('location: index.php');
}
?>