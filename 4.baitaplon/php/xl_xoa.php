<?php

    $user_id = $_GET['id'];
    require('ketnoi.php');
    include('chucnang.php');
    if(deleterow($user_id))
    {
        header("location:quanlybaiviet.php");
        exit();
    }
    else    {
        echo "loi j do";
    }
    mysqli_close($conn);

?>