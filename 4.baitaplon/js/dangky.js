$(document).ready(function(){
    $("#btdangky").click(function(){
     var tk_mail = $("#txtemail").val();
     var tk_mk1 = $("#txtmakhau").val();
     var tk_mk2 = $("#txtmakhau1").val();
     if(tk_mail=="")
     {
         alert('Bạn chưa nhập tên tài khoản');
     }
    else if(tk_mk1=="")
    {
        alert('Bạn chưa nhập mật khẩu');
    }
    else if(tk_mk2=="")
    {
        alert('hãy nhập lại mật khẩu');
    }
    else if(tk_mk1 != tk_mk2)
    {
        alert('mật khẩu xác nhận chưa đúng');
    }
     else{
         $.ajax({
             url:'../php/xl_dangky.php',
             type:'POST',
             data:{tk:tk_mail,mk:tk_mk1,mk1:tk_mk2},
             dataType:'json',
             success:function(res){       
                if(res==1)
                {
                    alert('tài khoản đã tồn tại');

                }
                else
                {
                    alert('đăng ký thành công');
                    window.location ='dangnhap.php';
                }
                  
                }
      })
     }
    })
 });
 