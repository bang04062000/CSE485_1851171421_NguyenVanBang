<?php
    $errors = array();  
    $email = $_POST['txtemail'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email.';
	}

    $password1 = $_POST['txtmatkhau'];
    $password2 = $_POST['txtmatkhau1'];
    if (!empty($password1)) {
    if ($password1 !== $password2) { 
        $errors[] = 'Your two password did not match.';
    } 
    } else {
    $errors[] = 'You forgot to enter your password.';
    }

    if (empty($errors)) {
        require("ketnoi.php");
            $sql = "SELECT * FROM quanlytaikhoan WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            echo "email da ton  tai";
        }else{
            $pass =md5($password1);
            $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
            $sql = "INSERT INTO quanlytaikhoan(email,matkhau,ngaytao,trangthai)
             VALUES ('$email','$pass',NOW(),'$activation_code')";
            if(mysqli_query($conn,$sql)){
                header("Location:dangnhap.php");
                exit();
            }else{
                echo "Loi. Kiem tra lai cau truy van: ".$sql;
            }
        }
    }else{
        echo "Hien thi loi";
    }
?>