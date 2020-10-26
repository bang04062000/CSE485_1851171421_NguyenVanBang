<?php
session_start();
require("ketnoi.php");
if($_POST["txtemail"] !='' && $_POST["txtmatkhau"] !='')
{
    $taikhoan = $_POST["txtemail"];
    $matkhau =$_POST["txtmatkhau"];
    $matkhau = md5($matkhau);
    $sql = "SELECT * FROM quanlytaikhoan where email ='$taikhoan' and matkhau ='$matkhau'";
    $user=mysqli_query($conn,$sql);
    if(mysqli_num_rows($user)>0)
    {
        $_SESSION["user"]=$taikhoan;
        header("Location:diendan.php");
        exit();
    }
    else
    {
        echo "nhap sai tài khoản hoặc mật khẩu";
    }
}
else
{
    echo "chưa nhập tài khoản hoặc mật khẩu";
}
?>