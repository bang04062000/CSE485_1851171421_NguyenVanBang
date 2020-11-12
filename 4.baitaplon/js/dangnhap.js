$(document).ready(function(){
    $("#btdangnhap").click(function(){
     var tk_mail = $("#txtemail1").val();
     var tk_mk1 = $("#txtmakhau1").val();
     if(tk_mail=="")
     {
         alert('Bạn chưa nhập tên tài khoản');
        
     }
    else if(tk_mk1=="")
    {
        alert('Bạn chưa nhập mật khẩu');
    }
    else{
         $.ajax({
             url:'../php/xl_dangnhap.php',
             type:'POST',
             data:{tk:tk_mail,mk:tk_mk1},
             dataType:'json',
             success:function(res){       
                if(res==1)
                {
                    alert('đăng nhập thành công');
                    window.location ='diendan.php';
                }
                else
                {
                    alert('tài khoản hoặc mật khẩu chưa chính xác');
                
                }
                }
      })
     }
    })
 });
 