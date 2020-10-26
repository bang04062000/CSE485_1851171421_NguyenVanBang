<?php
  
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'baitaplonweb';
    $conn = mysqli_connect($host,$user, $pass, $db);
    if(!$conn){
        die("Ko the ket noi");
    }
 
?>


