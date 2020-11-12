
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
  </div> 
        <div class="tao">

     
        <main class="container">
            <div class="row">
                <div class="col-md-12">
                  
                        <div class="form-group">
                          <label for="txtUserID">Tiêu đề</label>
                          <input type="text" class="form-control" name="txttieude" id="txttieude" value ="">
                        </div>
                        <div class="form-group">
                          <!-- <label for="txtFirstName">link img</label> -->
                          <input type="hidden" class="form-control" name="txtimg" id="txtimg" value = "../img/logotlu.jpg">
                        </div>
                        <div class="form-group">
                          <label for="txtFirstName">từ khóa :</label>
                        <select name="" id="sltukhoa" >
                        <option value="0">chọn từ khóa</option>
                        <option value="1">công nghệ thông tin</option>
                        <option value="2">Hỏi đáp</option>
                        </select>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="txtnguoidang" id="txtnguoidang" value = "<?php echo "".$_SESSION['user']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="txtLastName">nội dung</label>
                          <textarea id="txtnoidung" name="txtnoidung" class="form-control" rows="5" cols="33"> </textarea>
                        </div>
                        <div class="form-group">
                          <input  type="submit" class="form-control  btn_tao" name="sbmSave" id="sbmSave" value="tạo">
                        </div>
                    
                    
                </div>
            </div>
      </main>
      </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/dangbai.js"></script>
    </body>
</html>