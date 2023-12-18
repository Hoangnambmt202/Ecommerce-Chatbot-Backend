<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
require("./connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(isset($email) && isset($password)){
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if ($row == 0) {
            echo "Email đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        if($row > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            
            header('location: manage.php');
        }
        else {
            
            echo "Email đăng nhập không tồn tại! Hãy thử lại !";
                // s
        }   

    }
}
$conn->close()
?>
