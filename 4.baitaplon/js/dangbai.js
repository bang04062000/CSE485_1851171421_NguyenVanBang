$(document).ready(function(){
    $("#sbmSave").click(function(){
     var tieude = $("#txttieude").val();
     var tukhoa =  $("#sltukhoa option:selected");
     var   img = $("#txtimg").val();
     var   noidung = $("#txtnoidung").val();
     var nguoidang =$("#txtnguoidang").val();
    tukhoa1 =tukhoa.text();
     if(tieude=="")
     {
         alert('Bạn chưa nhập tiêu đề');
     }
     else if(tukhoa1 =='chọn từ khóa')
     {
        alert('hãy chọn từ khóa');    
     }
     else{
         $.ajax({
             url:'../php/xl_thembaidang.php',
             type:'POST',
             data:{td:tieude,tk:tukhoa1,img:img,nd:noidung,nguoidang:nguoidang},
             dataType:'json',
             success:function(res){       
                if(res==1)
                {
                    alert('Bài viết của bạn đã được đăng tải');
                    window.location ='sukien.php';
                }
                else
                {
                    alert('có lỗi gì đó !');

                }
                  
                }
      })
     }
    })
 });
 