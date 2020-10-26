<?php
include("chucnang.php");
require('ketnoi.php'); 
$ten = $_POST['txtten'];
$nd = $_POST['txtnoidungbl'];
$id = $_GET['id'];

$s = insertbl($id,$ten,$nd);
 if ($s)
 {
   header("location:ct_bai.php?id=$id");
 }
 else
 {
     echo "that bai";
 }
?>