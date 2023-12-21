<?php
    // Tạo kết nối
    $conn = mysqli_connect("localhost", "root", "", "webbannem2");
    // Kiểm tra kết nối
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>