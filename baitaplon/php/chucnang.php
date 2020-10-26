<?php
function getall()
{
    global $conn;
    $sql = "select * from quanlybaidang";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_all($result);
    return $user;
}
function getOneUser($id)
{
    global $conn;
    $sql ="SELECT * from quanlybaidang where id_baidang ='$id'";
    $result = mysqli_query($conn,$sql);
    $user = mysqlI_fetch_array($result);
    return $user;
}

function getbinhluan($id)
{
    global $conn;
    $sql ="SELECT * from quanlybinhluan where id_sp ='$id'";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result); 
    return  $result;
}

function insert($tieude,$img,$noidung,$tukhoa)
{
    global $conn;
    $sql ="INSERT INTO quanlybaidang (tieude,img,noidung,tukhoa,date)
    VALUES ('$tieude','$img','$noidung','$tukhoa',Now())";  
      $result = mysqli_query($conn,$sql);
      if($result)
      return true;

      return false;
}
function insertbl($id_nd,$ten,$nd_bl)
{
    global $conn;
    $sql ="INSERT INTO quanlybinhluan (id_sp,ten,nd_bl,date)
    VALUES ('$id_nd','$ten','$nd_bl',Now())";  
      $result = mysqli_query($conn,$sql);
      if($result)
      return true;

      return false;
}

?>