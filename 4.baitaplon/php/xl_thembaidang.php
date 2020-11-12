<?php
include("chucnang.php");
require('ketnoi.php'); 
$tieude = $_POST['td'];
$img = $_POST['img'];
$tukhoa = $_POST['tk'];
$noidung = $_POST['nd'];
$nguoidang = $_POST['nguoidang'];
$kt =0;
$s = insert($tieude,$img,$noidung,$tukhoa,$nguoidang);
 if ($s)
 {
  $kt =1;
 }
 else
 {
  $kt =2;
 }
 echo json_encode($kt); 
?>