<?php
    if(isset($_POST['tukhoa'])){
        
        $tukhoa = $_POST['tukhoa'];
    }
     require('ketnoi.php');
    $sql = "SELECT * FROM quanlybaidang WHERE tukhoa = '$tukhoa' ";
    mysqli_set_charset($conn,'UTF8');
    $kq = mysqli_query($conn,$sql);
    $users= array();
    while($row = mysqli_fetch_assoc($kq))
    {
        $id =$row['id_baidang'];
        $td = $row['tieude'];
        $anh = $row['img'];
        $nd = $row['noidung'];
        $dt = $row['date'];
        $user =$row['ten_nguoidang'];
        $users[] = array("tieude" => $td, "noidung" => $nd, "date" => $dt, "img" => $anh,"id_baidang" => $id,"ten_nguoidang"=> $user);
    }
 
    echo json_encode($users);

?>