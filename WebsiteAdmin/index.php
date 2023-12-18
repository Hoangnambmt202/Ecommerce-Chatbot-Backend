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
        <form onsubmit=" return validateForm()" action="handle_Login.php" class="form form-login" method="POST">
            <h1 class="heading-form">ĐĂNG NHẬP HỆ THỐNG QUẢN TRỊ</h1>
            <div class="body-form">
                <input class="input-form m-bt-10 email" name="email" type="email" placeholder="Nhập email tài khoản" >
                <span class="emailError" style="color: red;"></span><br>
                <input class="input-form m-bt-10 password" name="password" type="password" placeholder="Nhập mật khẩu tài khoản" >
                <span class="passwordError" style="color: red;"></span><br>
                <div class="form-group m-bt-10">
                    <input type="checkbox" name="remember" class="remember-check">
                    <label for="">Ghi nhớ</label>
                </div>
                <div class="form-group group-submit">
                    <input class="input-submit" type="submit"  value="ĐĂNG NHẬP">
                    <input class="input-submit" type="submit" value="LÀM MỚI">
                    
                </div>
            </div>
        </form>
    </div>
    <?php include './handle_Login.php';?>

</body>

</html>