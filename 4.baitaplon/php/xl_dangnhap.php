<?php

session_start();
require("ketnoi.php");

    $taikhoan = $_POST['tk'];
    $matkhau = $_POST['mk'];
    $matkhau = md5($matkhau);
    $kt =0;
    $sql = "SELECT * FROM quanlytaikhoan where email ='$taikhoan' and matkhau ='$matkhau'";
    $user=mysqli_query($conn,$sql);
  
    if(mysqli_num_rows($user)==0)
    {
      $kt=2;
    }
    else
    {
        $_SESSION["user"]=$taikhoan;
        $kt=1;
    }

    echo json_encode($kt); 

?>