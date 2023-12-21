<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
include_once './connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(isset($email) && isset($password)){
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if ($row == 0) {
            echo "<script>alert('Email đăng nhập này không tồn tại. Vui lòng kiểm tra lại.')</script>";
        }
        if($row > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header('location: manage.php');
        }
          

    }
}
$conn->close()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/grid.css">
    <link rel="stylesheet" href="./assets/manage.css">
    <script src="./js/login.js"></script>
    <title>HND - QUẢN TRỊ HỆ THỐNG</title>
</head>

<body>
    <div class="main-container grid">
        <?php
        if(!isset($_SESSION["email"])) {
        ?>
        <form onsubmit=" return validateForm()" action="index.php" class="form form-login" method="POST">
            <h1 class="heading-form">ĐĂNG NHẬP HỆ THỐNG QUẢN TRỊ</h1>
            <div class="body-form">
                <input class="input-form m-bt-10 email" name="email" type="email" placeholder="Nhập email tài khoản" >
                <span class="emailError" style="color: red;"></span><br>
                <input class="input-form m-bt-10 password" name="password" type="password" placeholder="Nhập mật khẩu tài khoản" >
                <span class="passwordError" style="color: red;"></span><br>
                <div class="form-group m-bt-10">
                    <input type="checkbox" name="remember" class="remember">
                    <label for="remember">Ghi nhớ</label>
                </div>
                <div class="form-group group-submit">
                    <input class="input-submit" type="submit"  value="ĐĂNG NHẬP">
                    <input class="input-submit" type="submit" value="LÀM MỚI">
                    
                </div>
            </div>
        </form>
        <?php
        }
        else {
            header('location: manage.php');
        }
        ?>
    </div>

</body>

</html>