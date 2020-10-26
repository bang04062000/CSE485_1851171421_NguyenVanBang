<?php
include("chucnang.php");
require('ketnoi.php'); 
$tieude = $_POST['txttieude'];
$img = $_POST['txtimg'];
$s = insert($tieude,$img,$noidung,$tukhoa);
 if ($s)
 {
   header("location:sukien.php");
 }
 else
 {
     echo "that bai";
 }
?>