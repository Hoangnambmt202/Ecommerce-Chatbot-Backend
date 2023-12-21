<div class="heading"><h1>SỬA DANH MỤC SẢN PHẨM</h1></div>

    <?php
        $id_Cat = $_GET["id_Cat"];
        $sql = "SELECT * FROM `category` WHERE Cat_ID=$id_Cat";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if(isset($_POST["submit"])){
            $Cat_Name = $_POST["Cat_Name"];
            if(isset($Cat_Name)) {
                $sql1 = " UPDATE `category` SET Cat_Name = '$Cat_Name' WHERE Cat_ID = $id_Cat";
                mysqli_query($conn,$sql1);
                header('location : ./manage.php?page_layout=manageCategory');
            }     
        }
        $conn->close();
    ?>
    <form method="POST" action="./manage.php?page_layout=manageCategory">
        <label for="Cat_Name">Tên danh mục:</label>
        <input class="update-prt-input" type="text" id="Cat_Name" name="Cat_Name" value="<?php echo $row['Cat_Name'] ?> " required>
        <input class="submit" type="submit" value="Lưu sửa đổi">
    </form>
    <script>$("#prospects_form").submit(function(e) {
e.preventDefault();
}); </script>
    
