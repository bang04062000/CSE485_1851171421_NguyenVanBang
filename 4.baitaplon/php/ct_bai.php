
<?php
session_start();
if(!isset($_SESSION["user"]))
{
    header("location:dangnhap.php");
    exit();
}
$id = $_GET['id'];
require("ketnoi.php");
include("chucnang.php");
$s = getOneUser($id);
$sql ="SELECT * from quanlybinhluan where id_sp ='$id' ORDER BY id_binhluan DESC ";
$result = mysqli_query($conn,$sql);

?>

<!doctype html>
<html lang="en">
<head>
<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../css/trangnd.css">
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
<div class="baiviet">
<div class="content">
<h1>
 <a href="sukien.php"><i class="fas fa-home"></i></a>
        bài viết gần đây gần đây</h1>
</div>

<div class="content-bai">
    <h1><?php echo $s['tieude'];?></h1>
    <h6><i class="fas fa-calendar-alt"> <?php echo $s['date'];?></i>
    <i class="fas fa-user"> <?php echo $s['ten_nguoidang']; ?></i>
    <i class="fas fa-comment-dots"> <?php    echo $row = mysqli_num_rows($result);       ?></i>
  </h6>
    <!-- <img src="<?php echo $s['img'];?>" alt=""> -->
    <p>
    <?php echo $s['noidung'];?>
    </p>
  

 </div>
 </div>

 <div class="binhluan_ht_bl">
 
 <div class="binhluan">
    <div class="row">
                <div class="col-md-12">
            
                    <form action="xl_thembl.php?id=<?php echo $id ;?>" method="POST">
                        <div class="form-group">
                          <label for="txtUserID"></label>
                          <input type="hidden" class="form-control" name="txtten" id="txtten" value ="<?php echo "".$_SESSION['user']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="txtLastName">nội dung</label>
                          <textarea id="txtnoidungbl" name="txtnoidungbl" class="form-control" rows="5" cols="33"> </textarea>
                        </div>
                        <div class="form-group">
                          <input  type="submit" class="form-control  btn_tao" name="submit" id="sbmSave" value="bình luận">
                        </div>
                    
                    </form>
                </div>
            </div>
  </div>

        <?php
            while($row = mysqli_fetch_array($result))
            {
        ?>
            <div class="ht_bl">
            <h4><i class="fas fa-user"> <?php echo $row['ten'] ?></i></h4>

            <i class="fas fa-calendar-alt"> <?php echo $row['date'];?></i>
            <p>
            <?php echo $row['nd_bl'] ?>
            </p>
        </div>
        <?php }  ?>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>