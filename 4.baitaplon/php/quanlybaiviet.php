<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("location:dangnhap.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/sukien.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="dautrang">
        <h1>
          CSE.TLU
        </h1>
        <ul>
          <li><a href="sukien.php">danh sách câu hỏi</a></li>
          <li><a href="datcauhoi.php">đặt câu hỏi</a></li>
          <li><a href="quanlybaiviet.php">quản lý bài viết</a></li>
          <li><a href="tukhoa.php">từ khóa</a></li>
          <li><?php echo "Xin chào : ".$_SESSION['user']; ?>
          <ul>
      <li><a href="dangxuat.php">đăng xuất</a></li>
    </ul>
        </li>
        </ul>
  </div> 
 <table class="table">
   <thead>
     <tr>
       <th>tiêu đề</th>
       <th>date</th>
       <th>chi tiết</th>
       <th>xóa</th>
     </tr>
   </thead>
   <tbody>
   <?php
                        require('ketnoi.php');                    
                        $ten = $_SESSION['user'];
                        $sql ="SELECT * FROM quanlybaidang WHERE ten_nguoidang='$ten' ";
                        $kq = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($kq))
                              {    
                      ?>
                                <tr>
                                  <td ><?php echo $row['tieude']; ?></td>
                                  <td><?php echo  $row['date'] ;?></td>
                                  <td>
                                   <a href="ct_bai.php?id=<?php echo $row['id_baidang'];?>"><i class="far fa-eye"></i></a>
                                  </td>
                                  <td>
                                <a href="xl_xoa.php?id=<?php echo $row['id_baidang'];?>"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                        <?php } ?>
   </tbody>
 </table>

    <script src="../js/jquery-3.5.1.min.js"></script>
      <script src="../js/xoa.js"></script>
  </body>
</html>

  