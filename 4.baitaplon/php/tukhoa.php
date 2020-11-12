
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
    <link rel="stylesheet" href="../css/tukhoa.css">
   
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
  
       <div class="tukhoa">
       <label for="txtFirstName">từ khóa :</label>
                        <select name="" id="sltukhoatk" >
                        <option value="0">chọn từ khóa</option>
                        <option value="1">công nghệ thông tin</option>
                        <option value="2">Hỏi đáp</option>
                        </select>

       </div>


<div class="tdtk">
<h1>
     <a href="diendan.php"><i class="fas fa-home"></i></a>
   Tìm kiếm theo từ khóa
    </h1> 
</div>
       <div class="content">

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
            <i class="fas fa-user"><?php echo $row[6] ?></i>
            <i class="fas fa-calendar"> <?php echo $row[5] ?></i>   
           
           </div>
          </div>
          
          <?php } ?>
          

  </div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/tukhoa.js"></script>
  </body>
</html>