<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/grid.css">
  <link rel="stylesheet" href="./assets/e-commerce.css">
  <link rel="stylesheet" href="./assets/manage.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <title>Admin</title>
</head>

<body>
  <header class="header grid ">
    <navbar>
      <ul class="navbar-list">
        <li class="navbar-item"><a href="">TRUNG HIẾU</a></li>
        <li class="navbar-item"><p>Xin chào ADMIN</p></li>
      </ul>
    </navbar>
    
      
  </header>
  <div class="main-container grid">
    <section class="sidebar-section col l-2">
      <div class="menu">
        <h1 class="menu-heading">BẢNG THỐNG KÊ</h1>
        <navbar>
          <ul>
            <li><a href="./statistical.html">Trang chủ</a></li>
            <li><a href="./e-commerce.php">Quản lý sản phẩm</a></li>
            <li><a href="./form.php">Thêm sản phẩm</a></li>
            <li><a href="./insert_category.php">Thêm danh mục</a></li>
          </ul>
        </navbar>
      </div>
    </section>

    <section class="content-section col l-10">
      <div class="content">
        <div class="parameter">
          <div class="inner-div money">
            <div class="inner-div-title">
              <i class="material-icons">attach_money</i>
              <b>Doanh thu</b>
            </div>
            <div class="progress-bar">
              <div class="progress-money">50%</div>
            </div>
          </div>

          <div class="inner-div shipping">
            <div class="inner-div-title">
              <i class="material-icons">local_shipping</i>
              <b>Số hàng đã giao</b>
            </div>
            <div class="progress-bar">
              <div class="progress-shipping">60%</div>
            </div>
          </div>

          <div class="inner-div inbox">
            <div class="inner-div-title">
              <i class="material-icons">inbox</i>
              <b>Hàng còn trong kho</b>
            </div>
            <div class="progress-bar">
              <div class="progress-inbox">60%</div>
            </div>
          </div>
        </div>
        <!-- chart thống kê -->
        <div class="frame">
          <div claas="column-diagram">
            <div id="chart"></div>
            <div id="Chart2"></div>
            <script src="./column.js"></script>
          </div>
        </div>
        <!-- <h2>Biểu đồ thống kê sản phẩm</h2> -->
        <div class="chart-round">
          <div class="chart">
            <h2>Sản phẩm còn trong kho</h2>
            <canvas id="productChart"></canvas>
          </div>

          <div class="board-infor">
            <div class="board">
              <h2>Sản phẩm</h2>
              <div class="column">
                <p class="title-product">Chăn:</p>
                <p class="remaining-goods">Còn 200 chiếc</p>
              </div>
              <div class="column">
                <p class="title-product">Ga giường:</p>
                <p class="remaining-goods">Còn 200 chiếc</p>
              </div>
              <div class="column">
                <p class="title-product">Gối:</p>
                <p class="remaining-goods">Còn 200 chiếc</p>
              </div>
              <div class="column">
                <p class="title-product">Nệm:</p>
                <p class="remaining-goods">Còn 200 chiếc</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="round.js"></script>
</body>

</html>