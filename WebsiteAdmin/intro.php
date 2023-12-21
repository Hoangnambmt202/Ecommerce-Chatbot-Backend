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