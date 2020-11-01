
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 <link rel="stylesheet" href="../css/diendan.css">
</head>
  <body>
    <header>
        <div class="logo">
           <div class="logo-img" ><img src="../img/logotlu.jpg" alt=""></div>
            <div class="logo-text">
                <i class="fas fa-search search1"></i>
                <div style="margin-left: 15px;">
                    KHOA CÔNG NGHỆ THÔNG TIN
                </div>  
           <span> 
               Faculty of Computer Science and Engineering-Thuyloi Univesity
           </span>
        </div>
            
            <div class="nav">
                <div class="nav-sdt-gmail">
                    <i  class="fas fa-phone"> 0955555555|</i>
                    <i class="fas fa-envelope"> nbang923@gmail.com</i>                 
                  </div>
                 <div class="search">
                <form>
                    <input size="20" style="font-size: 20px;" type="text" name="search" placeholder="Search..">
                    <button style="font-size: 20px;" name="button" type="button"><i class="fas fa-search"></i></button>
                 </form>
            </div> 
        </div>
    </div>
    </header>
    <div class="menu">
        <i class="fas fa-bars bars1"></i>
<ul>
        <li><a href="trangchu.php">TRANG CHỦ</a></li>
        <li><a href="#">GIỚI THIỆU</a></li>
        <li ><a href="diendan.php">SINH VIÊN</a></li>
        <li ><a href="diendan.php">ĐÀo TẠO</a></li>
        <li ><a href="diendan.php">DIỄN ĐÀN</a> </li>
     <li>
                    <?php
                        if(!isset($_SESSION['user'])){
                        header("Location:diendan.php");
                   ?>    
                    <?php
                        }else{
                    ?>
       
                <?php echo "Xin chào : ".$_SESSION['user']; ?>
            <ul>
                <li><a href="dangxuat.php">đăng xuất</a></li>
            </ul>
        </li>
                    <?php 
                        }
                    ?>
    
</ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<div class="diendan">
<ul>
    <h3>1.CSE Forum</h3>
    <li><i class="far fa-comment"></i> <a href="sukien.php">Sự Kiện CSE Forum</a></li>
    <li><i class="far fa-comment"></i> <a href="">Góp ý -Kiến định cho CSE Forum</a></li>
    <li><i class="far fa-comment"></i> <a href="">phòng truyền thông</a></li>
</ul>
<ul>
    <h3>2.Đồng Hành cùng mùa thi</h3>
    <li><i class="far fa-comment"></i> <a href="">Thông tin tuyển sinh </a></li>
    <li><i class="far fa-comment"></i> <a href="">Chia sẻ kinh nghiệm</a></li>
    <li><i class="far fa-comment"></i> <a href="">tài liệu ôn thi</a></li>
</ul>
<ul>
    <h3>3.Hành lang lớp Học</h3>
    <li><i class="far fa-comment"></i> <a href="">Trên giảng đường</a></li>
    <li><i class="far fa-comment"></i> <a href="">Ngoài giảng đường</a></li>
</ul>
<ul>
    <h3>4.Đào tạo-Hướng nghiệp</h3>
    <li><i class="far fa-comment"></i> <a href="">Chia sẻ tài liệu bằng tiếng việt</a></li>
    <li><i class="far fa-comment"></i> <a href="">các chứng chỉ Quóc Tế</a></li>
    <li><i class="far fa-comment"></i><a href="">Chia sẻ tài liệu bằng tiếng anh</a></li>
</ul>
<ul>
    <h3>5.Các thế hệ</h3>
    <li><i class="far fa-comment"></i> <a href="">k58</a></li>
    <li><i class="far fa-comment"></i> <a href="">k59</a></li>
    <li><i class="far fa-comment"></i> <a href="">K60</a></li>
    <li><i class="far fa-comment"></i> <a href="">k61</a></li>
    <li><i class="far fa-comment"></i> <a href="">k62</a></li>
</ul>
</div>


    <div class="footer">
    <div class="footer-right">
    <h2>  TRƯỜNG ĐẠI HỌC THỦY LỢI</h2>
    <div class="footer-right1">
        <ul>
        <li><i class="fas fa-map-marker-alt">  Địa chỉ:nhà C1,Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội.</i>  </li>
             <li><i class="fas fa-phone"> Điện thoại: (024) 38522201 - Fax: (024) 35633351</i></li>
            <li><i class="far fa-envelope"> Email: phonghcth@tlu.edu.vn</i></li>
            <li><i class="fas fa-globe-asia"> website: http://cse.tlu.edu.vn/</i></li>
          
        </ul>
    </div>
    </div>
    <div class="footer-mid">
        <img src="http://www.tlu.edu.vn/portals/0/images/upload/TLU-map.png" alt="">
    </div>
    <div class="footer-left">
        <h2>    CHIA SẺ  MẠNG XÃ HỘI</h2>
        <ul>
            <li><i class="fab fa-facebook"><a href="https://www.facebook.com/groups/khoacongnghethongtintlu/">  FACEBOOK</a></i></li>
            <li><i class="fab fa-instagram"><INSTAGRAM/i> <a href="#">   INSTAGRAM</a></i></li>
            <li><i class="fab fa-youtube"><a href="https://www.youtube.com/user/daihocthuyloi"> YOUTUBE</a></i></li>
            <li><i class="fab fa-twitter-square"><a href="https://twitter.com/Daihocthuyloihn"> TWITTER</a></i></li>
        </ul>
    </div>
    <div class="footer-footer">
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