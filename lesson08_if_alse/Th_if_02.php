<?php
if (isset ($_SESSION['user_id'])){
    if($_SESSION['user_type']=='admin'){
        echo "Nếu người dùng là quản trị viên, cho phép truy cập vàp trang quản trị viên";
    }
    else
    { 
        echo "Nếu người dùng không phải quản trị viên, cho phép truy cập vào trang thông tin cá nhân";
    }
}
else
    {
        "Nếu người dung chưa đăng nhập, chuyển hướng đến tranbg đăng nhập";
    }
    header('Location: login.php');
    exit;

?>