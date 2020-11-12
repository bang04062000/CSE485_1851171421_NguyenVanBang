
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
   <div class="content">
   <h1>
     <a href="diendan.php"><i class="fas fa-home"></i></a>
     bài viết gần đây gần đây</h1> 
   <?php
        require('ketnoi.php');
        if(isset($_GET['page']))
        {
          $page =$_GET['page'];
        }

        $sobai = 3;
        $sql = "SELECT * FROM quanlybaidang";
        $kq = mysqli_query($conn,$sql);
        $num= mysqli_num_rows($kq);
        $sotrang=ceil($num/$sobai);
       if($page <1)
       {
         $page=1;
         header("location:sukien.php?page=1");
       }
   
        if($num>0)
        {
          $batdau=($page-1)*$sobai;
          
          $sql1 ="SELECT * FROM quanlybaidang ORDER BY `id_baidang` DESC limit $batdau,$sobai ";
          $kq1 = mysqli_query($conn,$sql1);
          while($row =  mysqli_fetch_assoc($kq1))
          {
          ?>
      <div class="content-main">
           <div class="post">
           <img src="<?php echo $row['img']?>">
            <h4> <a href="ct_bai.php?id=<?php echo $row['id_baidang'];?>"> <?php echo $row['tieude'] ?></a> </h4>
            <i class="fas fa-user"> <?php echo $row['ten_nguoidang'] ?></i>
            <i class="fas fa-calendar"> <?php echo $row['date'] ?></i>     
            <i class="fas fa-comment-dots"> <?php 
              $id =$row['id_baidang'];
              $sql2 ="SELECT * FROM quanlybinhluan WHERE id_sp='$id'";
              $kq2 = mysqli_query($conn,$sql2);
              echo $row = mysqli_num_rows($kq2);
            
            ?></i>     
           </div>
          </div>
          <?php } 
        } ?>  
  
          <nav aria-label="...">
  <ul class="pagination pagination-sm">
  <?php 
            for($i=1;$i <= $sotrang;$i++)
            { ?>
    <li class="page-item a"><a class="page-link" href="sukien.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>

     <?php      
  }  
       ?>
  </ul>
</nav>


     

   <!--Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>