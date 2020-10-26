
<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("location:dangnhap.php");
        exit();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/sukien.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="dautrang">
        <h1>
          CSE.TLU
        </h1>
        <ul>
          <li><a href="">danh sách câu hỏi</a></li>
          <li><a href="datcauhoi.php">đặt câu hỏi</a></li>
          <li><a href="">chưa trả lời</a></li>
          <li><a href="">từ khóa</a></li>
          <li><?php echo "Xin chào : ".$_SESSION['user']; ?>
        <ul>
          <li><a href="dangxuat.php">đăng xuất</a></li>
        </ul>
        </li>
        </ul>
  </div> 

   <div class="content">
   <h1>
     <a href="diendan.php"><i class="fas fa-home"></i></a>
     bài viết gần đây gần đây</h1> 
   <?php
        require('ketnoi.php');
        include('chucnang.php');
        $user = getall();
        foreach($user as $row)
          {    
          ?>
   <div class="content-main">
           <div class="post">
           <img src="<?php echo $row[2]?>">

            <h4> <a href="ct_bai.php?id=<?php echo $row[0];?>"> <?php echo $row[1] ?></a> </h4>

            <i class="fas fa-calendar"> <?php echo $row[5] ?></i>
           
           </div>
          </div>
          <?php } ?> 
          <div class="footer-diendan">
    <h1>
      © 2020 TRƯỜNG ĐẠI HỌC THỦY LỢI
 </h1>
  </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>