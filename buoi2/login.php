<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <form action="login.php" method="post">
    <h1> Đăng Nhập</h1>
    <div> 
        <input type="text" name="username" placeholder ="tên đăng nhập">
    </div>
    <div>
       <input type="password" name="password" placeholder="mật khẩu">
    <div>
        <input type="submit" value="đăng nhập">
    </div>
    
  </form>  
  <?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $tenDangNhap = $_POST['username'];
    $matKhau = $_POST['password'];
    echo $matKhau;
    // tên đăng nhập = admin
    }
    $tenDangNhap = $_POST['username'];
    $matKhau = $_POST['password'];
    //echo $tenDangNhap . $matKhau;
    if ($tenDangNhap=='admin' && $matKhau == '123'){
        header('location: trangchu.php');
    }
    else{
        echo "<p class='warning'>Sai thông tin đăng nhập </p>";

    }
    //echo $matKhau;
    // tên đăng nhập = admin

 
  ?>
</body>
</html>