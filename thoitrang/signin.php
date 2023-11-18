
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo..png" type="image/x-icon">
    <link rel="stylesheet" href="signin.css">
    <title>Đăng Nhập</title>
</head>

<body>
    <div class="container">
        <div class="form-content">
            <form action="signin.php" method="post">
                <h1><a style="color: blue;">Đăng </a><a style="color: red;">Ký</a> </h1>
                <input type="text" id="name" placeholder="Tên hiển thị...">
                <span></span>
                <br>

                <input type="email" id="email" placeholder="Email...">
                
                <br>

                <input type="password" id="password" placeholder="Nhập password...">
                
                <br>

                <input type="password" id="nhaplaipassword" placeholder="Nhập lại password..."><br>
                <input type="date" id="date"><br>
                <input type="file" id="file"><br>
                <input type="submit" value="Đăng Ký" id="submit"><br>
                <p>Đăng Nhập!</p>
                <p>Quên mật khẩu?</p>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    $name = $email = $password = $nhaplaipasswprd = $date = $file = "";
    $nameError = $emailError = $passwordError = $nhaplaipasswprdError = $dateError = $fileError = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //kiem tra ten
        $name = $_POST['name'];
        if(empty($name)){
            $nameError = "* Tên Vui Lòng Không Để Trống!";
        }else{
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $nameError = "* Tên Chỉ Được Nhập Chữ Cái!";
            }
        }

        //ktra email
        $email = $_POST['email'];
        if(empty($email)){
            $emailError = "Email Không được bỏ trống!";
        }else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailError = "Email chưa đúng định dạng!";
            }
        }
    }
?>