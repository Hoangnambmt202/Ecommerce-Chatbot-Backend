
    <?php
    require("./connect.php");
    $sql_query_catName = "SELECT * FROM category";
    $sql_connect_catName = mysqli_query($conn, $sql_query_catName);
    if (!$sql_connect_catName) {
        echo "Khong the lay du lieu";
    }


    ?>
    <div class="heading"><h1>THÊM SẢN PHẨM MỚI</h1></div>

                <form class="form grid" action="./manage.php?page_layout=manageProduct" method="POST">
                    <div class="row">
                        <div class="col l-6">
                            <label for="Prt_Name">Tên sản phẩm :</label>
                            <input class="insert-prt-input" type="text" name="Prt_Name" placeholder="Thêm tên sản phẩm mới" required>
                            <label for="Prt_Price">Giá sản phẩm :</label>
                            <input class="insert-prt-input" type="text" name="Prt_Price" placeholder="Thêm giá sản phẩm mới" required>
                            <label for="Prt_Description">Mô tả sản phẩm :</label>
                            <input class="insert-prt-input" type="text" name="Prt_Description" placeholder="Thêm mô tả cho sản phẩm mới" required>
                            <label for="Prt_Img">Ảnh sản phẩm : </label>
                            <input class="insert-prt-input" type="text" name="Prt_Img" placeholder="Thêm link hình ảnh sản phẩm mới" required>
                        </div>
                        <div class="col l-6">
                            <label for="Prt_Quantity">Số lượng sản phẩm :</label>
                            <input class="insert-prt-input" type="text" name="Prt_Quantity" placeholder="Thêm số lượng sản phẩm mới" required>
                            <label for="Ensure">Bảo hành :</label>
                            <select>
                                <option value="6">6 tháng</option>
                                <option value="12">12 tháng</option>
                            </select>

                            <label for="Cat_ID">Thuộc danh mục :</label>
                            <select name="Cat_ID" required>
                                //<?php
                                while ($sql_arr_catName = mysqli_fetch_assoc($sql_connect_catName)) {
                                    echo "<option value='$sql_arr_catName[Cat_ID]'> $sql_arr_catName[Cat_Name] </option>";
                                }
                                ?>
                            </select>
                        </div>

                    </div>

                    <input type="submit" class="submit" name="submit" value="Thêm sản phẩm">
                </form>
            </div>
        </section>

