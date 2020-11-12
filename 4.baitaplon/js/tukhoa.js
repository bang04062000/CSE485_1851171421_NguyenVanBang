$(document).ready(function(){
   $("#sltukhoatk").change(function(){
    var tukhoa =  $("#sltukhoatk option:selected");
    tk=tukhoa.text();
    if(tk=='chọn từ khóa'){
        alert('Bạn cần chọn 1 từ khóa');
    }
    else{

        $.ajax({
            url:'../php/xl_tukhoa.php',
            type:'POST',
            data:{tukhoa:tk},
            dataType:'json',
            success:function(res){
                $(".content").empty();     
                for(var i=0;i<res.length    ;i++){
                    var id =res[i]['id_baidang'];
                    var tieude = res[i]['tieude'];
                    var anh = res[i]['img'];
                    var noidung= res[i]['noidung'];
                    var tukhoa = res[i]['tukhoa'];
                    var date = res[i]['date'];
                    var user =res[i]['ten_nguoidang'];
                    $(".content").append("<div class='content-main'><div class='post'><img src='"+anh+"'><h4>  <a href='ct_bai.php?id="+id+"'>"+tieude+"</a></h4> <i class='fas fa-user'>   "  +user+ " </i> <i class='fas fa-calendar'>    "+date+"</i></div></div>");
                }    

            
           }
     })
    }
   })
});
