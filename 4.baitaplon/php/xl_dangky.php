<?php
 
 require("ketnoi.php");

    $tk = $_POST['tk'];
    $mk = $_POST['mk'];
    $mk1 = $_POST['mk1'];

$kt =0;
$sql = "SELECT * FROM quanlytaikhoan WHERE email = '$tk'";
$result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0)
        {
           $kt =1;
        }
        else{
            $pass =md5($mk);
            $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
            $sql = "INSERT INTO quanlytaikhoan(email,matkhau,ngaytao,trangthai)
             VALUES ('$tk','$pass',NOW(),'$activation_code')";
            if(mysqli_query($conn,$sql)){
                $kt =2;
             
            }
          
        }
        echo json_encode($kt); 
?>