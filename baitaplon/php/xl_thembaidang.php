<?php
include("chucnang.php");
require('ketnoi.php'); 
$tieude = $_POST['txttieude'];
$img = $_POST['txtimg'];
$tukhoa = $_POST['txttukhoa'];
$noidung = $_POST['txtnoidung'];
$nguoidang = $_POST['txtnguoidang'];
$s = insert($tieude,$img,$noidung,$tukhoa,$nguoidang);
 if ($s)
 {
   header("location:sukien.php");
 }
 else
 {
     echo "that bai";
 }
?>